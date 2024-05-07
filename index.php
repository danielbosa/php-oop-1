<?php

include __DIR__ . "/Views/header.php";
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Book.php';

//$starWars = new MovieBasic('Star Wars',5);
$movies = [
    new Movie('Babylon A.D.','en','TEST',9.99,5.601,'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg'),
    new Movie('Miraculous World : Paris, Les Aventures de Toxinelle et Griffe Noire','fr','TEST',4.99,6.935,'https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg'),
    new Movie('Five Nights at Freddy\'s','en','TEST',2.99,7.8,'https://image.tmdb.org/t/p/w342/j9mH1pr3IahtraTWxVEMANmPSGR.jpg'),
    new Movie('Rien à foutre','fr','TEST',0.99,6.417,'https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg')
];

$books = [
    new Book('Unlocking Android','W. Frank Ableson, Charlie Collins, Robi Sen',416,'Mobile',14.99,8.33,'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg'),
    new Book('Android in Action, Second Edition','W. Frank Ableson", "Robi Sen',592,'Mobile',11.90,7.25,'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson2.jpg'),
    new Book('Specification by Example','Gojko Adzic',0,'Mobile',0.00,5.48,'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/adzic.jpg'),
    new Book('Flex 3 in Action','Tariq Ahmed with Jon Hirschi',600,'Internet',14.99,8.33,'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed.jpg')
]

?>

<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach($movies as $movie){ ?>
                <div class="col-lg-3"> 
                    <div class="card">
                        <img src="<?php echo $movie->cover ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title ?></h5>
                            <p class="card-text"> <?php echo $movie->language ?> </p>
                            <p class="card-text"> <?php echo $movie->printVote() ?> </p>
                            <p class="card-text"> <?php ?> </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>    
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2>Books</h2>
        <div class="row">
            <?php foreach($books as $book){ ?>
                <div class="col-lg-3"> 
                    <div class="card">
                        <img src="<?php echo $book->cover ?>" class="card-img-top" alt="<?php echo $book->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $book->title ?></h5>
                            <p class="card-text"> <?php echo $book->author ?> </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>    
                </div>
            <?php } ?>
        </div>
    </section>



</main>


<?php

include __DIR__ . "/Views/footer.php";
?>