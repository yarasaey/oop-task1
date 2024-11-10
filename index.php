<?php
require_once 'Product.php';
//create object from product class
$book=new Product();
$book->name="HaYat";
$book->price=200;
$book->brand="kayal";
$book->image="1.jpj";



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h3><?php echo $book-> getName(); ?></h3>
    <h3><?php echo $book->brand; ?></h3>
    <h3><?php echo $book->image; ?></h3>
    <h3><?php echo $book->  priceAfterDiscount(20); ?></h3>
    <h3><?php echo $book-> getFinalPrice(); ?></h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>