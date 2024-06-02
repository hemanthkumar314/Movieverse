<?php

session_start();
include '_dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/0c077e7e73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/account_styles.css">
    <title>Account Info</title>
</head>
<body>
    
    <div class="row">

        <div class="col-md-6 left-box" style="background-color: black;">
            <img src="images/logo5.png" alt="" class="title-pic">
            <img src="images/logo2.png" alt="" class="title-pic-2">
            <img src="images/logo3.png" alt="" class="title-pic">
        </div>

        <div class="col-md-6 right-box" >
            <button class="btn btn-light home" style="background-image: linear-gradient(to right, #CC00CC , #660066);"><i class="fa-solid fa-house icon "></i><a href="welcome.php">Home</a></button>
            <div class="container box" style="  width: 60%;">
                <h2>Account Details</h2>
                <hr>
                <?php
                    if($_SESSION['username'])
                    {
                        $name=$_SESSION['username'];

                        if(!strcmp($name,"Rohith") || !(strcmp($name,"Bablu")) || !(strcmp($name,"Hemanth")) || !(strcmp($name,"Vishwagna")))
                        {
                            $sql="SELECT * FROM admin_details where name='$name'";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo '    <div class="content">
                                <h3><i class="icon fa-solid fa-user"></i>  <strong>'.$row['name'].'</strong></h3>
                                <h5><i class="icon fa-sharp fa-solid fa-at"></i> <strong>'.$row['email'].'</strong></h3>
                                <h4><i class="icon fa-solid fa-phone"></i> <strong>'.$row['phone'].'</strong></h3>
                                <h5><i class="icon fa-solid fa-lock"></i></h3>
                                </div>';
                            }
                            
                        }

                        else{
                            $sql="SELECT * FROM user_details where name='$name'";
                            $result=mysqli_query($conn,$sql);

                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    echo '    <div class="content">
                                    <h3><i class="icon fa-solid fa-user"></i>  <strong>'.$row['name'].'</strong></h3>
                                    <h5><i class="icon fa-sharp fa-solid fa-at"></i> <strong>'.$row['email'].'</strong></h3>
                                    <h4><i class="icon fa-solid fa-phone"></i> <strong>'.$row['phone'].'</strong></h3>
                                    <h5><i class="icon fa-solid fa-lock"></i></h3>
                                    </div>';
                                }
                        }
                        
                    }

                ?>
                   
            </div>
                
        </div>
    </div>
    
    
</body>
</html>

