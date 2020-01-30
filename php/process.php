<?php
include ('connection.php');
function initialise() {
    $name = " ";
    $surname = " ";
    $birthday =" ";
    $phone = " ";
}
function write() {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $birthday =$_POST["birthday"];
        $phone = $_POST["phone"];
//Insert into Database
        $GLOBALS['mysqli']->query("INSERT INTO clients(c_id, c_name, c_surname, c_birthday, c_phone) VALUES (null,'$name','$surname','$birthday','$phone')");
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
