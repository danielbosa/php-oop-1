<?php

include __DIR__ . "/Views/header.php";
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Book.php';


$starWars = new MovieBasic('Star Wars',5);
$movies = [
    new Movie('Babylon A.D.','en','horrorTEST',9.99,5.601,'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg')
];

$books = [
    new Book('Unlocking Android','W. Frank Ableson, Charlie Collins, Robi Sen',416,'Mobile',14.99,8.33,'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg')
]

?>

<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach($movies as $movie){ ?>
                <div class="col-lg-3"> 
                    <div class="card">
                        <img src="<?php echo $movie->cover ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title ?></h5>
                            <p class="card-text"> <?php echo $movie->language ?> </p>
                            <p class="card-text"> <?php echo $movie->printVote() ?> </p>
                            <p class="card-text"> <?php ?> </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
                        <img src="<?php echo $book->cover ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $book->title ?></h5>
                            <p class="card-text"> <?php echo $book->author ?> </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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