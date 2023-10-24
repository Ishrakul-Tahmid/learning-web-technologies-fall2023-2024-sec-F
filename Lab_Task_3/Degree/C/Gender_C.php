<html>
    <head>
    </head>
    <body>
       <form method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree" value="<?php
if(isset($_POST['submit']))
{
    $degree = $_POST['degree'];
    echo $degree;
}
?>" />SSC
            <input type="checkbox" name="degree" value=""/> HSC
            <input type="checkbox" name="degree" value=""/> BSc
            <input type="checkbox" name="degree" value=""/> MSc <br>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
       </form> 
    </body>
</html>