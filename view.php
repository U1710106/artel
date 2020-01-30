<?php
include('../artel/php/process.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Artel Group</title>
    <link rel="stylesheet" type="text/css" href="css/v_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="view">
    <h1>List of Registered Clients</h1>
    <form class="example" action="search.php" method="POST">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <table>
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Birthday</th>
            <th scope="col">Phone Number</th>
        </tr>
        </thead>
        <tbody>
        <?php view(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
