<?php

use app\Models\Auction;

require_once __DIR__ . "/vendor/autoload.php";
require_once "app/Models/User.php";

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//$auctionModel = new Auction();
//
//for($i = 0; $i < 20; $i++) {
//    $auctionModel->createAuction(productId: rand(1, 4), owner: rand(1,2));
//}