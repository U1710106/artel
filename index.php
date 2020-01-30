<?php
include ('connection.php');

$name = " ";
$surname = " ";
$birthday =" ";
$phone = " ";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Artel Group</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="form-style-10">
    <h1>Client Registration</h1>
    <form action="index.php" method="POST">
        <div class="section">First Name & Last Name</div>
        <div class="inner-wrap">
            <label>First Name <input type="text" name="name" value="<?= $name?>" /></label>
            <label>Last Name <input type="text" name="surname" /></label>
        </div>

        <div class="section">Birthday & Phone</div>
        <div class="inner-wrap">
            <label>Birthday <input type="date" name="birthday" /></label>
            <label>Phone Number <input type="text" name="phone" /></label>
        </div>

        <div class="button-section">
            <input type="submit" name="register" />
            <span class="privacy-policy">
     <input type="checkbox" name="term">You agree to our Terms and Policy.
     </span>
        </div>
    </form>
</div>
<?php
if (isset($_POST["register"]))
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday =$_POST["birthday"];
    $phone = $_POST["phone"];
//Insert into Database
    $mysqli->query("INSERT INTO clients(c_id, c_name, c_surname, c_birthday, c_phone) VALUES (null,'$name','$surname','$birthday','$phone')");
}
?>


</body>
</html>
