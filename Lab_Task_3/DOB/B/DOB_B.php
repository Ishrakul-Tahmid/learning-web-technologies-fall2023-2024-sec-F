<html>
    <head>
        <title>Lab 3</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>DATE OF BIRTH</legend>
                <input type="date" name="date" value=""><hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    $DOB = $_POST['date'];
    echo $DOB;
}
?>