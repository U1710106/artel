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
    <h2>Search Results</h2>
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
        <?php search(); ?>
        </tbody>
    </table>
</div>
</body>
</html>

