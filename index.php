<?php
include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Book.php";
?>
<main class="container">
    <?php
        // $action = new Category();
        // $action->name = "Action";
        $starWars = new Movie('Star Wars','English', 10, 4.5, 'https://www.imdb.com/title/tt0076759/');
        echo $starWars->title;
        $starWars->showAll();
        $libro = new Book('Libro','100', 10, 4.5, 'https://www.imdb.com/title/tt0076759/');
        echo $libro->numPages;
        $libro->showAll();
    ?>
</main>