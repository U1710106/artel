<!DOCTYPE html>
<html>
<head>
    <title>Artel Group</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="form-style-10">
    <h1>Client Registration</h1>
    <form action="proccess.php" method="POST">
        <div class="section">First Name & Last Name</div>
        <div class="inner-wrap">
            <label>First Name <input type="text" name="name" /></label>
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

</body>
</html>
