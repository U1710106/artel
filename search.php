<?php
include("connection.php");
$search = trim($_POST["search"]);
$find = $mysqli->query("Select * from clients where c_phone like '%$search%'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Artel Group</title>
    <link rel="stylesheet" type="text/css" href="v_style.css">
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
        <?php
        while ($row = $find->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['c_name']; ?></td>
                <td><?php echo $row['c_surname']; ?></td>
                <td><?php echo $row['c_birthday']; ?></td>
                <td><?php echo $row['c_phone']; ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>

