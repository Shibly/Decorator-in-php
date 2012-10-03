<?php
spl_autoload_extensions(".php");
spl_autoload_register();


$books = new Items\books("Jeffry Way", "Learn Jquery in 30 Days", 100);
$books->display();
$borrow = new \Decorator\Borrowable($books);
$borrow->borrowItem("Shibly");
$borrow->borrowItem("Sujon");
$borrow->borrowItem("Raju");
$borrow->borrowItem("Tanmay");
$borrow->borrowItem("Tarin");
$borrow->display();
$books->display();
$borrow->returnItem("Shibly");
$borrow->display();
$books->display();