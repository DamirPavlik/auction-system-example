<?php

use app\Models\Auction;

require_once __DIR__ . "/vendor/autoload.php";
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$auctionModel = new Auction();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auctions</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Owner</th>
                <th>Latest Bid</th>
                <th>Won By</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($auctionModel->getAll() as $auction) : ?>
                <tr>
                    <td><?= $auction['product'] ?></td>
                    <td><?= $auction['owner'] ?></td>
                    <td><?= $auction['latest_bid'] ?></td>
                    <td><?= $auction['won_by'] ?></td>
                    <td><a href="bid.php?auctionId=<?= $auction['id'] ?>">Bid</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
