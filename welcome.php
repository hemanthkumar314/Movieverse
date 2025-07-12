<?php

session_start();
// if(isset($_SESSION['username']))
// {
//     echo "Welcome to Home page MR.".$_SESSION['username'];
// }

include '_dbmovconnect.php';

if(isset($_POST['logout']))
{
    header('location:logout.php');
}

if(isset($_POST['acc']))
{
    header('location:account.php');
}

if(isset($_POST['genre-value']))
{
    $_SESSION['genre-value']=$_POST['genre-value'];
    header('location:genre.php');
}

if(isset($_POST['search']))
{
    echo "I am here in search";
    $_SESSION['search']=$_POST['search'];
    header('location:display.php');
}

if(isset($_POST['lang-value']))
{
    $_SESSION['lang-value']=$_POST['lang-value'];
    header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>MovieVerse</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  
    <script src="https://kit.fontawesome.com/0c077e7e73.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
  <link rel="stylesheet" href="css/welcome_styles.css">

</head>
<body>
  
    <!-- HEADER -->
        <nav class="navbar">
            <a class="fon" href="#"><h3>MovieVerse</h3></a>
        
            <div class="right-container">
                <form action="Welcome.php" method="POST" style="position: relative; right: 400px; top: 20px;">
                <select name="lang-value"  class="form-style"  required>
                <option value="" name="lang" class="form-style" >Filters</option>
                    <option value="Telugu" name="lang" class="form-style">Telugu</option>
                    <option value="Hindi" name="lang" class="form-style">Hindi</option>
                    <option value="Tamil" name="lang" class="form-style">Tamil</option>
                    <option value="English" name="lang" class="form-style">English</option>
                </select>
                <input type="submit" class="btn btn-dark sub-btn1" value="GO">
                </form>

                <form action="welcome.php" method="POST" style="position: relative;  bottom: 20px;">
                <input type="text" class="search-box" name="search" placeholder="search" required>
                <i class="fa-solid fa-magnifying-glass fa-beat"></i>
                <input type="submit" value="Search" class="sub-btn1">
                </form>
                <a href="display.php"></a>
                
            </div>

            <div class="form-group mt-2">
                <label for="select-val"></label>
            </div>

            <div class="dropdown">
                <a href="#" class="login-link dropdown-toggle acc"
                    data-toggle="dropdown" href="#">
                    <i class="input-icon fa-solid fa-user " style="font-size: 25px;"></i><span ></span></a>
                <ul class="dropdown-menu tyu" style="background-color: black;">
                    <li>
                        <form action="account.php" method="POST">
                            <input type="submit" name="acc" class="btn btn-dark sub-btn" value="Account">
                        </form>
                    </li>

                    <li>
                        <form action="#" method="POST">
                        <input type="submit" name="logout" class="btn btn-dark sub-btn" value="Logout">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END OF HEADER -->

        
        <!-- MAIN CONTAINER -->
        <!-- <div class="slider">
            <div class="content">
                <h1 style="font-weight: bold;">Kung Fu Panda</h1>
                <p class="iop">When Po the Panda, a kung fu enthusiast, gets selected as the Dragon Warrior, he decides to team up with the Furious Five and destroy the evil forces that threaten the Valley of Peace.</p> 
                    <button id="myBtn" onclick="myFunction()">Pause</button>
            </div>
            
            <div class="videoContainer">
                <video autoplay controls  loop id="myvideo" width="100%" height="auto" >
                    <source src="images/kgfc.mp4" type="video/mp4">
                </video>
            </div>
        </div> -->

        <div class="slider">
            <div class="content">
                <h1 style="font-weight: bold;">Kung Fu Panda</h1>
                <p class="iop">
                When Po the Panda, a kung fu enthusiast, gets selected as the Dragon Warrior, he decides to team up with the Furious Five and destroy the evil forces that threaten the Valley of Peace.
                </p>
                <button id="volBtn" onclick="toggleVolume()">🔊</button>
            </div>

            <div class="videoContainer">
                <video  autoplay controls loop id="myvideo" width="100%" height="auto">
                <source src="images/kgfc.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        
        <h1 class="title" style="padding-top:3.5%">Trending Movies ...</h1>
        <div class="card-container">
            <?php

                $sql="SELECT * FROM movies where year>='2025' ORDER BY year, language";

                $result=mysqli_query($con,$sql);

                
                if($_SESSION['type']=='Admin')
                {
                        while($row=mysqli_fetch_assoc($result))
                        {
        

                    echo '              <div>
                    
                    <div class="card floatcard"  >
                    <a href="#"><img src="'.$row['image'].'" class="card-img" alt=""></a>
                    <div class="card-body">
                        <h2 class="name"style="margin-left: 10px;">'.$row['mov_name'].'</h2>
                        <h5 class="year" style="margin-left:7px;">'. $row["year"]. '</h5>
                            <h5 class="imdb">'. $row["imdb"]. '</h5>
                            <h5 class="rate">'. $row["rating"]. '</h5>
                            <h5 class="dur">'. $row["duration"]. 'min</h5>
                        <h6 class="des" style="margin-left: 10px;">'.$row['description'].'</h6>
                        <h6 class="actor" style="margin-left: 10px;">Cast : '.$row["actor"].','.$row["actress"].'</h6>
                        <h6  class="director" style="margin-left: 10px;">Director:'.$row["director"].'</h6>
                        <form action="edit.php" method="POST">
                        <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                            <option  class="form-style">'.$row['mov_id'].'</option>
                        </select>
                        <input type="submit"  class="btn btn-dark" style=" background-color:black;margin-left: 8px" value="Edit">
                        </form>
                    </div>
                </div>
                    </div>';

                    }
                        
                }
                
                else{
                    while($row=mysqli_fetch_assoc($result))
                    {
                        
                    echo '<div class="card floatcard"  >                
                    <a href="#"><img src="'.$row['image'].'" class="card-img" alt=""></a>
                    <div class="card-body">
                        <h2 class="name" style="margin-left: 10px;">'.$row['mov_name'].'</h2>
                        <h5 class="year" style="margin-left:7px;">'. $row["year"]. '</h5>
                        <h5 class="imdb">'. $row["imdb"]. '</h5>
                        <h5 class="rate">'. $row["rating"]. '</h5>
                        <h5 class="dur">'. $row["duration"]. 'min</h5>
                        <h6 class="des" style="margin-left: 10px;">'.$row['description'].'</h6>
                        <h6 class="actor" style="margin-left: 10px;">Cast : '.$row["actor"].','.$row["actress"].'</h6>
                        <h6  class="director" style="margin-left: 10px;">Director:'.$row["director"].'</h6>
                        <form action="rate.php" method="POST">
                            <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                            <option  class="form-style">'.$row['mov_id'].'</option>
                            </select>
                            <input type="submit"  class="btn btn-dark" name="rate_id" style=" background-color:black;margin-left: 8px" value="Rate">
                        </form>
                    </div>
                </div> ';
                }
                
            }

            ?>            
        </div>
        <h1 class="title"style="padding-top:3.5%">Highly Rated.. </h1>
        <div class="card-container">
            <?php
                    $sql1="SELECT * FROM movies where imdb>='8' ORDER BY imdb, year,language ";
                    $result1=mysqli_query($con,$sql1);
                    if($_SESSION['type']=='Admin')
                    {
                            
                            while($row1=mysqli_fetch_assoc($result1))
                            {

                        echo '              <div>
                        
                        <div class="card floatcard"  >
                        <a href="#"><img src="'.$row1['image'].'" class="card-img" alt=""></a>
                        <div class="card-body">
                            <h2 class="name"style="margin-left: 10px;">'.$row1['mov_name'].'</h2>
                            <h5 class="year" style="margin-left:7px;">'. $row1["year"]. '</h5>
                                <h5 class="imdb">'. $row1["imdb"]. '</h5>
                                <h5 class="rate">'. $row1["rating"]. '</h5>
                                <h5 class="dur">'. $row1["duration"]. 'min</h5>
                            <h6 class="des" style="margin-left: 10px;">'.$row1['description'].'</h6>
                            <h6 class="actor" style="margin-left: 10px;">Cast : '.$row1["actor"].','.$row1["actress"].'</h6>
                            <h6  class="director" style="margin-left: 10px;">Director:'.$row1["director"].'</h6>
                            <form action="edit.php" method="POST">
                        <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                        <option  class="form-style">'.$row1['mov_id'].'</option>
                        </select>
                        <input type="submit"  class="btn btn-dark" style=" background-color:black;margin-left: 8px" value="Edit">
                        </form>
                        </div>
                    </div>
                        </div>';

                        }
                    }

                    else{
                                    
                        while($row1=mysqli_fetch_assoc($result1))
                        {
                                            echo '<div class="card floatcard"  >
                                        
                        <a href="#"><img src="'.$row1['image'].'" class="card-img" alt=""></a>
                        <div class="card-body">
                            <h2 class="name" style="margin-left: 10px;">'.$row1['mov_name'].'</h2>
                            <h5 class="year" style="margin-left:7px;">'. $row1["year"]. '</h5>
                            <h5 class="imdb">'. $row1["imdb"]. '</h5>
                            <h5 class="rate">'. $row1["rating"]. '</h5>
                            <h5 class="dur">'. $row1["duration"]. 'min</h5>
                            <h6 class="des" style="margin-left: 10px;">'.$row1['description'].'</h6>
                            <h6 class="actor" style="margin-left: 10px;">Cast : '.$row1["actor"].','.$row1["actress"].'</h6>
                            <h6  class="director" style="margin-left: 10px;">Director:'.$row1["director"].'</h6>
                            <form action="rate.php" method="POST">
                                <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                                <option  class="form-style">'.$row1['mov_id'].'</option>
                                </select>
                                <input type="submit"  class="btn btn-dark" name="rate_id" style=" background-color:black;margin-left: 8px" value="Rate">
                            </form>
                        </div>
                    </div> ';
                    }
                }       
            ?>
        </div>
        <h1 class="title"style="padding-top:3.5%">Short & Sweet</h1>
        <div class="card-container">
            <?php
                    $sql2="SELECT * FROM movies WHERE duration<='125' ORDER BY duration,year";
                    $result2=mysqli_query($con,$sql2);
                    if($_SESSION['type']=='Admin')
                    {
                            
                            while($row2=mysqli_fetch_assoc($result2))
                            {

                        echo '              <div>
                        
                        <div class="card floatcard"  >
                        <a href="#"><img src="'.$row2['image'].'" class="card-img" alt=""></a>
                        <div class="card-body">
                            <h2 class="name"style="margin-left: 10px;">'.$row2['mov_name'].'</h2>
                            <h5 class="year" style="margin-left:7px;">'. $row2["year"]. '</h5>
                                <h5 class="imdb">'. $row2["imdb"]. '</h5>
                                <h5 class="rate">'. $row2["rating"]. '</h5>
                                <h5 class="dur">'. $row2["duration"]. 'min</h5>
                            <h6 class="des" style="margin-left: 10px;">'.$row2['description'].'</h6>
                            <h6 class="actor" style="margin-left: 10px;">Cast : '.$row2["actor"].','.$row2["actress"].'</h6>
                            <h6  class="director" style="margin-left: 10px;">Director:'.$row2["director"].'</h6>
                            <form action="edit.php" method="POST">
                        <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                        <option  class="form-style">'.$row2['mov_id'].'</option>
                        </select>
                        <input type="submit"  class="btn btn-dark" style="background-color:black;margin-left: 8px" value="Edit">
                        </form>
                        </div>
                    </div>
                        </div>';

                        }
                    }

                    else{
                                    
                        while($row2=mysqli_fetch_assoc($result2))
                        {
                                            echo '<div class="card floatcard"  >
                                        
                        <a href="#"><img src="'.$row2['image'].'" class="card-img" alt=""></a>
                        <div class="card-body">
                            <h2 class="name" style="margin-left: 10px;">'.$row2['mov_name'].'</h2>
                            <h5 class="year" style="margin-left:7px;">'. $row2["year"]. '</h5>
                            <h5 class="imdb">'. $row2["imdb"]. '</h5>
                            <h5 class="rate">'. $row2["rating"]. '</h5>
                            <h5 class="dur">'. $row2["duration"]. 'min</h5>
                            <h6 class="des" style="margin-left: 10px;">'.$row2['description'].'</h6>
                            <h6 class="actor" style="margin-left: 10px;">Cast : '.$row2["actor"].','.$row2["actress"].'</h6>
                            <h6  class="director" style="margin-left: 10px;">Director:'.$row2["director"].'</h6>
                            <form action="rate.php" method="POST">
                                <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                                <option  class="form-style">'.$row2['mov_id'].'</option>
                                </select>
                                <input type="submit"  class="btn btn-dark" name="rate_id" style=" background-color:black;margin-left: 8px" value="Rate">
                            </form>
                        </div>
                    </div> ';
                    }
                }       
            ?>
        </div>
        <!-- END OF MAIN CONTAINER -->
    
        <div class="hero">
            <div class="slider1">
                <div class="slide s1" style="background-image: url('images/Batman2022.jpg');">
                    <div>
                        <form action="welcome.php" method="POST">
                            <select name="genre-value" id="select-val1"  style="display:none;" required>
                            <option>Drama</option>
                            </select>
                            <input type="submit"  id="form-style" style=" position: relative;font-family:serif; background-color: transparent;border: none;" value="DRAMA">
                        </form>
                    </div>
                </div>
                <div class="slide s2" style="background-image: url('images/after.jpg');">
                    <div>
                        <form action="welcome.php" method="POST" >
                            <select name="genre-value" id="select-val2"  style="display:none;" required>
                            <option>Romance</option>
                            </select>
                            <input type="submit"  id="form-style" style=" position: relative; font-family:serif; background-color: transparent;border: none;" value="ROMANCE">
                        </form>
                    </div>
                </div>
                <div class="slide s3" style="background-image: url('images/bang.jpg');">
                    <div>
                        <form action="welcome.php" method="POST">
                            <select name="genre-value" id="select-val3"  style="display:none;" required>
                            <option>Action</option>
                            </select>
                            <input type="submit"  id="form-style" style=" position: relative; font-family:serif; background-color: transparent;border: none;" value="ACTION">
                        </form>
                    </div>
                </div>
                <div class="slide s4" style="background-image: url('images/DarkJonas.jpg');">
                    <div >
                        <form action="welcome.php" method="POST">
                            <select name="genre-value" id="select-val4"  style="display:none;" required>
                            <option>Thriller</option>
                            </select>
                            <input type="submit"  id="form-style" style=" position: relative; font-family:serif; background-color: transparent;border: none;" value="THRILLER">
                        </form>
                    </div>
                </div>
                <div class="slide s5" style="background-image: url('images/love.jpeg');">
                    <div>
                        <form action="welcome.php" method="POST">
                            <select name="genre-value" id="select-val5"  style="display:none;" required>
                            <option>Love</option>
                            </select>
                            <input type="submit"  id="form-style" style=" position: relative; font-family:serif; background-color: transparent;border: none;" value="LOVE">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <?php
            if(isset($_SESSION['delete']) && $_SESSION['delete']!='')
            {?>
                <script>swal("Deleted Successfully", "", "success");</script>
       <?php     }
       unset($_SESSION['delete']);
            ?>
            <?php
            if(isset($_SESSION['update']) && $_SESSION['update']!='')
            {?>
                <script>swal("Updated Successfully", "", "success");</script>
       <?php     }
       unset($_SESSION['update']);
       ?>
    <script src="data.js"></script>
</body>
</html>

