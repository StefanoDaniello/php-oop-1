<?php
include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Category.php";
?>
<main class="container">
    <?php
        $action = new Category();
        $action->name = "Action";
        $starWars = new Movie('Star Wars','English', $action);
        echo $starWars->title;
    ?>
</main>