<?php

require_once "Rectangle.class.php";
require_once "TriangleRectangle.class.php";
require_once "Cercle.class.php";
require_once "pave.class.php";
require_once "Pyramide.class.php";
require_once "Sphere.class.php";

$rectangle = new Rectangle(5, 7);
$triangle = new TriangleRectangle(10,14);
$cercle = new Cercle(17);
$pave = new Pave(12, 5, 10);
$pyramide = new Pyramide(5,25,52,36);
$sphere = new Sphere(36);



$rectangle -> afficherRectangle();

$triangle -> afficherTriangle();

$cercle -> afficherCercle();

$pave -> afficherPave();

$pyramide -> afficherPyramide();

$sphere -> afficherSphere();



?>