<?php
include_once 'src/Point.php';
include_once 'src/MoveablePoint.php';
$point = new Point(5,5);
$moveablepoint = new MoveablePoint(5,5,5,5);
echo 'playerX = '.$moveablepoint->getX().'<br>';
echo 'playerY = '.$moveablepoint->getY().'<br>';
$moveablepoint->move();
echo 'move'.'<br>';
echo 'playerX = '.$moveablepoint->getX().'<br>';
echo 'playerY = '.$moveablepoint->getY().'<br>';
$moveablepoint->move();
echo 'move'.'<br>';
echo 'playerX = '.$moveablepoint->getX().'<br>';
echo 'playerY = '.$moveablepoint->getY().'<br>';