<html>
    <head>
    </head>
    <body>
       <form method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="<?php
if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    echo $gender;
}
?>" />Male
            <input type="radio" name="gender" value=""/> Female
            <input type="radio" name="gender" value=""/> Other <br><br>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
       </form> 
    </body>
</html>