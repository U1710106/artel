<?php
include ('../artel/php/process.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Artel Group</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form-style-10">
    <h1>Client Registration</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="section">First Name & Last Name</div>
        <div class="inner-wrap">
            <label>First Name <input type="text" name="name" /><span class="error">* <?php echo $nameErr;?></span></label>
            <label>Last Name <input type="text" name="surname" /><span class="error">* <?php echo $surnameErr;?></span></label>
        </div>
        <div class="section">Birthday & Phone</div>
        <div class="inner-wrap">
            <label>Birthday <input type="date" name="birthday" /><span class="error">* <?php echo $birthdayErr;?></span></label>
            <label>Phone Number <input type="text" name="phone" /><span class="error">* <?php echo $phoneErr;?></span></label>
        </div>
        <div class="button-section">
            <input type="submit" name="register" />
            <span class="privacy-policy">
     <input type="checkbox" name="term">You agree to our Terms and Policy.
     </span>
        </div>
    </form>
</div>
</body>
</html>
<?php
if (isset($_POST["register"]))
{
    write();
}
