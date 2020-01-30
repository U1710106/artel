<?php
include ('connection.php');
// define variables and set to empty values
$name = $surname = $birthday = $phone = "";
$nameErr = $surnameErr = $birthdayErr = $phoneErr = "";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Insert into Database
function write() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["surname"])) {
            $surnameErr = "Surname is required";
        } else {
            $surname = test_input($_POST["surname"]);
        }
        if (empty($_POST["birthday"])) {
            $birthdayErr = "";
        } else {
            $birthday = test_input($_POST["birthday"]);
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "";
        } else {
            $phone = test_input($_POST["phone"]);
        }
    }
    if ((empty($_POST["name"]) && empty($_POST["surname"])))
    {
        echo "Fields must be filled!";
    }
    else {
        $GLOBALS['mysqli']->query("INSERT INTO clients(c_id, c_name, c_surname, c_birthday, c_phone) VALUES (null,'$name','$surname','$birthday','$phone')");
    }

}
function search() {
    $search = trim($_POST["search"]);
    $find = $GLOBALS['mysqli']->query("Select * from clients where c_phone like '%$search%'");
    while ($row = $find->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['c_surname']; ?></td>
            <td><?php echo $row['c_birthday']; ?></td>
            <td><?php echo $row['c_phone']; ?></td>
        </tr>
    <?php endwhile;
}
function view() {
    //Data coming from form
    $data = $GLOBALS['mysqli']->query("Select * From clients;");
    function pre_r($result) {
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
while ($row = $data->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['c_name']; ?></td>
        <td><?php echo $row['c_surname']; ?></td>
        <td><?php echo $row['c_birthday']; ?></td>
        <td><?php echo $row['c_phone']; ?></td>
    </tr>
<?php endwhile;
}

