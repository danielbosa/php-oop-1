<?php

include __DIR__ . "/Views/header.php";
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Category.php';

?>

<main class="container">

<?php

    $starWars = new MovieBasic('Star Wars',5);
    echo $starWars->title;
    echo $starWars->vote;
    $starWars->printVote();

?>

</main>


<?php

include __DIR__ . "/Views/footer.php";
?>