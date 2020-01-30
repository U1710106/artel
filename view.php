<?php
include("connection.php");

//Data coming from form
$data = $mysqli->query("Select * From clients;");
function pre_r($result) {
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}
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
        <?php
        while ($row = $data->fetch_assoc()): ?>
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
