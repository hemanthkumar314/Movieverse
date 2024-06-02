<?php
 $showAlert=false;
 $showError=false;
 $flag=true;     
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $name;
    $pass=$_POST['logpass'];
    $cpass=$_POST['logpass1'];

    session_start();

    if(isset($_SESSION['name']))
    {   
        $showMsg=$_SESSION['value'];
        $name=$_SESSION['name'];
        if($pass==$cpass)
        {
            $pass = password_hash($_POST['logpass'], PASSWORD_DEFAULT);
            $sql="UPDATE `user_details` SET `password` = '$pass' WHERE `user_details`.`name` = '$name';";
    
            $result=mysqli_query($conn,$sql);
            
            if($result)
            {
                $showAlert=true;
                echo "hello";
            }
        }
    
        else{
            $showError=true;
            echo "hello world";
        }
    }
    session_unset();
    session_destroy();
}

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
    <link rel="stylesheet" href="css/forget_styles.css">
    <script src="https://kit.fontawesome.com/0c077e7e73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Update</title>
</head>
<body>
    
    <div class="row">

        <div class="col-md-6 left-box" style="background-color: black;">
            <img src="images/logo5.png" alt="" class="title-pic">
            <img src="images/logo2.png" alt="" class="title-pic-2">
            <!-- <div class="description">
                <p class="des">Discover the world of cinema like never before with our premier movie database
                    Explore your favorite titles, actors, and directors with ease, and stay up-to-date
                    on the latest news and reviews. Immerse yourself in the magic of film with our
                    sleek and sophisticated platform, where knowledge and entertainment collide.</p>            </div> -->
                    <img src="images/logo3.png" alt="" class="title-pic">
        </div>
        <div class="col-md-6 right-box" >
           
            <?php
                if($flag==true)
                {
                    echo '                           <div  class="alert alert-success alert-dismissible fade show" role="alert" >
                    <strong>Sucessfully Verified</strong>...Now you can update your Account password
                    <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
                      $flag=false;
                }
                
                if($showAlert==true)
                {
                    echo '<div  class="alert alert-success alert-dismissible fade show" role="alert" >
                    <strong>Congratulations!! </strong>Your Account is Updated Successfully 
                    <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else if($showError==true)
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Account Updation Failed</strong>.... Make sure that You have entered the same password in both the feilds 
                    <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }

            ?>

            <button class="btn btn-light home" style="background-image: linear-gradient(to right, #CC00CC , #660066);"><i class="fa-solid fa-house icon "></i><a href="index.php">Home</a></button>
            <div class="container box">
                 <h2>Recover Your Account</h2>
                 <form action="update.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="logpass" class="form-style" placeholder="Your Password" id="loguser" autocomplete="off" required>
                        <i class="input-icon fa-solid fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <input style="margin-top: 20px;" type="text" name="logpass1" class="form-style" placeholder="Confirm Your Password" id="loguser" autocomplete="off" required>
                        <i class="input-icon fa-solid fa-lock" style="margin-top: 30px;"></i>
                    </div>
                    <input type="submit" class="btn mt-4" value="submit">
                 </form>   
                   
            </div>
                
        </div>
    </div>
    
    
</body>
</html>