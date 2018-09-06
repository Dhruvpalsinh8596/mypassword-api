<?php

$connection = mysqli_connect("localhost", "root", "", "db_prg1");

if($_POST)
{
    $email = $_POST['email'];
    
    $selectq = mysqli_query($connection, "select * from tbl_student where st_email='{$email}'") or die (mysqli_error($connection));
    $fetchrow = mysqli_fetch_array($selectq);
    $count = mysqli_num_rows($selectq);
    
    if($count>0)
    {
      print_r($fetchrow);
    }else
    {
        echo"<script>alert('User Not Found');</script>"; 
    }
}
?>
<html>
    <body>
        <form method="post">
            
            Email:<input type="email" name="email">
            <br/>
            <input type="submit">
        </form>
    </body>
</html>


