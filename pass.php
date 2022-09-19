<?php

include('connect.php');

$uname = $_POST["username"];
$pass = $_POST["new_password"];

$sql1 = ("SELECT * FROM lightapp");
$result = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_array($result)) {

    $noname = $row['username'] ;
}

if ($noname == $uname )
{
    { 
        $sql2 = "UPDATE lightapp
        SET password='$pass'
        WHERE username='$uname'";
    }

if (mysqli_query($conn, $sql2)) 
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Password reset Success please Login Now");';
            echo 'window.location.href = "./login.html";';
            echo '</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql2. "
                . mysqli_error($conn);
        }

    }
else {

    echo '<script type="text/javascript">'; 
    echo 'alert("Email Doesnot Exist please Enter Right Email");';
    echo 'window.location.href = "./pass.html";';
    echo '</script>';


}


?>