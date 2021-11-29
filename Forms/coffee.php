<?php
use App\Entity\Coffee;

$coffee = new Coffee();
if ($coffee->isEmpty()) {
    $coffee->Refill();
} else {
    $coffee->Drink();
}
