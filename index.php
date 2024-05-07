<?php
include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Book.php";
$movies=[
    new Movie('Star Wars','English', 10, 4.5, 'img/batmancontent.jpeg'),
    new Movie('Harry Potter','English', 20, 7, 'img/batmancontent.jpeg'),
];
$books=[
    new Book('Libro 1','100', 10, 5, 'img/thor2content.jpeg'),
    new Book('Libro','200', 20, 10, 'img/thor2content.jpeg'),
];  
?>
<main class="container">
    <h2>Movies</h2>
    <div class="row">
        <?php foreach($movies as $movie){?>
        <div class="col-12 col-md-4 col-lg-3 mb-3">
            <div class="card">
                <img src="<?= $movie->cover?>" class="card-img-top" alt="<?= $movie->title?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->title?></h5>
                    <p class="card-text"><?= $movie->lenguage?></p>
                    <?= $movie->getVote()?>
                    <p>Price: <?= $movie->price?></p>
                </div>
            </div>
        </div>
        <?php }?>  
    </div>
   
    <h2>Books</h2>
    <div class="row">
        <?php foreach($books as $book){?>
        <div class="col-12 col-md-4 col-lg-3 mb-3 ">
            <div class="card">
                <img src="<?= $book->cover?>" class="card-img-top" alt="<?= $book->title?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $book->title?></h5>
                    <?= $book->getVote()?>
                    <p>Price: <?= $book->price?></p>
                </div>
            </div>
        </div>
        <?php }?>  
    </div>
</main>