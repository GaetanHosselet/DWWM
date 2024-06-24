<?php

require_once "Rectangle.class.php";
require_once "TriangleRectangle.class.php";
require_once "Cercle.class.php";
require_once "pave.class.php";

$rectangle = new Rectangle(5, 7);
$triangle = new TriangleRectangle(10,14);
$cercle = new Cercle(17);
$pave = new Pave(12, 5, 10);



$rectangle -> afficherRectangle();

$triangle -> afficherTriangle();

$cercle -> afficherCercle();

$pave -> afficherPave();




?>