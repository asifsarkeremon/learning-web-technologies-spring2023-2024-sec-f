<html>
<head> </head>
<body>
    <table border="1" cellspacing='0' align="center">

        <tr>
            <td height="40" width="200">
                <div align="left">
                    <ul>
                        <li><a href="reg.php">Register</a></li>    
                        <li><a href="search.php">Search</a></li>
                        <li><a href="update.php">Update </a></li>
                        <li><a href="delete.php">Delete</a></li>
                    </ul>
                </div>
            </td>
            <td colspan="3" height="40">

                <form method="post" action="regCheck.php" enctype="">
                    <fieldset style="width: 400;">
                        <legend><b>REGISTRATION</b></legend>
                        <table>

                            <tr>
                                <td width="200">Name</td>
                                <td width="300">:<input type="text" name="name" value=""/> <br></td>
                            </tr>
                
                            <tr>
                                <td>Contact no</td>
                                <td width="300">:<input type="text" name="contact" value=""/> <br></td>
                            </tr>
                
                            <tr>
                                <td>Username</td>
                                <td width="300">:<input type="text" name="username" value=""/> <br></td>
                            </tr>
                            
                            <tr>
                                <td>Password
                                </td><td width="300">:<input type="password" name="password" value=""/> <br></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit"/>
                                    <input type="button" name="reset" value="Reset"/>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>

            </td>
        </tr>
    </table>
</body>
</html>
