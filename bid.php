<?php

use app\Models\Bids;

require_once __DIR__ . "/vendor/autoload.php";
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!isset($_GET['auctionId'])) {
    die("no id");
}

$bidding = new Bids();
$bidding->placeBid(auctionId: $_GET['auctionId'], bidderId: rand(1,2), amount: rand(1, 1000));
?>