<?php
    require_once('../controller/sessionCheck.php');
    require_once('../model/userModel.php');

    $id = $_REQUEST['id'];
    $user = getUser($id);

?>

<center>
<h1> Welcome<?php echo $user['name']?>!</h1>
    <a href="profile.php? id=<?php echo $id ?>">Profile</a><br>

    <a href="change_password.php? id=<?php echo $id?>">Change Password</a></br>

    <a href="view_user.php">View User</a><br>

    <a href = "login.html">Logout</a><br>
</center>