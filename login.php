<?php
session_start();
if(isset($_POST['login']))
{
    
    $emailid=$_POST['email'];
    $pass=$_POST['pass'];
    
    $con=mysqli_connect('127.0.0.1','root','','car_rent');
    if($con==false)
    {
        echo "Error in connection";
    }
    else
    {
        $select="SELECT * FROM `customers` WHERE `emailid`='$emailid'  AND `password`='$pass'";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            $data=mysqli_fetch_assoc($query);
            $_SESSION['name']=$data['name'];
            ?>
            <script>
                alert("You have successfully logged in");
                window.open('book.html','_self');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Wrong Emailid and Password!! Try Again");
                window.open('index.html','_self');
            </script>
            <?php
        }
        
    }
}
?>
