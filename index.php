<?php
require __DIR__ . "/db.php";

$clients = mysqli_fetch_assoc(mysqli_query(
    $conn, "SELECT COUNT(*) AS c FROM clients"))['c'];
$services = mysqli_fetch_assoc(mysqli_query(
    $conn, "SELECT COUNT(*) AS c FROM services"))['c'];
$bookings = mysqli_fetch_assoc(mysqli_query(
    $conn, "SELECT COUNT(*) AS c FROM bookings"))['c'];
$revRow = mysqli_fetch_assoc(mysqli_query(
    $conn, "SELECT IFNULL (SUM(amount_paid), 0) AS s FROM
    payments"));

    $revenue = $revRow['s'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include 'nav.php';
    ?>
    <h1>Dashboard</h1>

    <ul>
        <li>Total Clients: <?php echo $clients;?></l>
        <li>Total Services: <?php echo $services;?></l>
        <li>Total Bookings: <?php echo $bookings;?></l>
        <li>Total Revenue: <?php echo number_format($revenue,2);?></l>

            <p>
      <a href="/clients.php">Add Client</a>
<a href="/bookings.php">Create Bookings</a>
            </p>




    </ul>
</body>
</html>