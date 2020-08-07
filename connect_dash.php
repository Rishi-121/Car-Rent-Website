<?php
session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    $address=$_POST['address'];
    $age=$_POST['username'];
    $no_ofdays=$_POST['days'];
    
    
    
    $con=mysqli_connect('127.0.0.1','root','','car_rent');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $insert="INSERT INTO `services`(`username`, `address`, `age`, `no of days`) VALUES ('$username','$address','$age','$no_ofdays')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Registered Successfully");
                window.open('details.php','_self');</script>
            <?php
                $_SESSION['username']=$username;
                $_SESSION['address']=$address;
//                $_SESSION['username']=$data['username'];
//                $_SESSION['username']=$data['username'];
                $_SESSION['days']=$no_ofdays;
                
            }
            else{
                echo "error";
            }
            
    }
    
    
    
        
}
?>