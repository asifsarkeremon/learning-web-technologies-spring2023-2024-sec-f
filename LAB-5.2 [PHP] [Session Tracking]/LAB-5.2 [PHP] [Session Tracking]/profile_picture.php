<?php 
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }

?>
<html>
<head> </head>
<body>
    <form>
        <table border="1" cellspacing='0'>

            <tr>
                <td colspan="2" height="80" width="600" >
                    <div style="font-size: 40px">XCompany</div>
                    <div align="Right">
                        Logged in as<a href="page1.html">Bob</a> |
                        <a href="Logout.php">Logout</a>
                    </div>
                </td>
            </tr>

            <tr>
                <td height="40" width="200">
                    <div><b>Account</b><hr></div>

                    <div align="left">
                        <ul>
                            <li><a href="logged_dashboard.php">Dashboard</a></li>
                            <li><a href="view_profile.php">view Profile</a></li>
                            <li><a href="edit_profile.php">Edit Profile</a></li>
                            <li><a href="profile_picture.php">Change Profile Picture</a></li>
                            <li><a href="change_password.php">Change Password</a></li>
                            <li><a href="logout.php">Logout </a></li>
                        </ul>
                    </div>
                </td>

                <td height="40">
                    <fieldset>
                        <legend>PROFILE PICTURE</legend>
                        <input type="file" name="myfile" value=""/><br>
                        <input type="submit" name="submit" value="Submit"/>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"height="40" align="Center">
                   Copyright 2017
                </td>
            </tr>
           

            
        </table>
    </form>
</body>
</html>
