<html>
    <head>
        <Title>Lab 3</Title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" value="" />
                <hr>
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];

        echo $email;
    }
?>