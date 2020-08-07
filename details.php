<html>
    <head>
        <title>Details of Users</title>
        <style>
            .button {
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
            .button5 {font-size: 24px;}
        </style>
    </head>
    <body>
        <h1 align="center" style="background-color:#ff7300; color:black">Thank You For using our services</h1>
        <h1><?php
        session_start();
            $date=date("Y-m-d");
            
            echo "Username: ".$_SESSION['username']."<br>";
            echo "Address:  ".$_SESSION['address']."<br>";
            echo "Starting date: " . $date . "<br>";
            echo "Price:    Rs ".$_SESSION['days']*5000;
                
            
        ?>
        
        </h1>
        <h3 style:color:"red">Go to home page Click Here----></h3>
        <a href="index.html">
        <button class="button button5">Clik Here</button>
</a>
    </body>
</html>