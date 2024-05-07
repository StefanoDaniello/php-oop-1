<?php
include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Book.php";
$movies=[
    new Movie('Unlocking Android','gb', 10, 4.5, 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg'),
    new Movie('Android in Action, Second Edition','gb', 20, 7, 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson2.jpg'),
    new Movie('Flex 3 in Action','gb', 40, 10, 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed.jpg'),
    new Movie('Flex 4 in Action','gb', 50, 10, 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed2.jpg'),
    new Movie('Collective Intelligence in Action','gb', 60, 10, 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alag.jpg'),
    new Movie('Batman','gb', 70, 10, 'img/batmancontent.jpeg'),
];



$books=[
    new Book('Babylon A.D. 1','100', 10, 5, 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg'),
    new Book('Miraculous World: Paris, Tales of Shadybug and Claw Noir','200', 20, 10, 'https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg'),
    new Book('Five Nights at Freddy\'s','300', 30, 10, 'https://image.tmdb.org/t/p/w342/j9mH1pr3IahtraTWxVEMANmPSGR.jpg'),
    new Book('Zero Fucks Given','400', 40, 10, 'https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg'),
    new Book('Thor','500', 50, 10, 'img/thor2content.jpeg'),
    new Book('Batman','600', 60, 10, 'img/batmancontent.jpeg'),
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
                    <p class="card-text"><?= $movie->getflag()?></p>
                    <?= $movie->getVote()?>
                    <p>Price: <?= $movie->getPrice()?></p>
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
                    <p>Price: <?= $book->getPrice()
                    ?></p>
                </div>
            </div>
        </div>
        <?php }?>  
    </div>
</main>