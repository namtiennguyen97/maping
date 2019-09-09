<?php
include 'Point2D.php';
include "Point3D.php";
$point2d = new Point2D(3,4);
$point3d = new Point3D(5,7,7);
$point2d->setXY(3,1);
echo "<br>";
 $point2d->toString();
 $point3d->setXYZ(3,5,1);
 echo "<br>";
 $point3d->toString();