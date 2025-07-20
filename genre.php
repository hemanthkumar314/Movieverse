 <?php
    
    session_start();
    include '_dbmovconnect.php';
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Genre</title>
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

  
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
 
  
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
 
  <link rel="stylesheet" href="css/genre.css">

</head>
<body>
  
            <!-- HEADER -->
                <nav class="navbar">
                    <a class="fon" href="#"><h3>MovieVerse</h3></a>
                
                    <div class="right-container">
                    <button class="btn btn-light home" style="background-image: linear-gradient(to right, #CC00CC , #660066);"><i class="fa-solid fa-house icon "></i><a href="welcome.php">Home</a></button> 
                    </div>

                    <div class="dropdown">
                        <a href="#" class="login-link dropdown-toggle acc"
                            data-toggle="dropdown" href="#">
                            Account</i><span ></span></a>
                        <ul class="dropdown-menu tyu">
                            <!-- <li><a href="#" class="acc1">Account</a></li> -->
                            <li>
                                <?php
                                
                                ?>
                                <form action="account.php" method="POST">
                                    <input type="submit" name="acc" class="btn btn-dark sub-btn" value="Account">
                                </form>
                            </li>

                            <li>
                                <form action="logout.php" method="POST">
                                <input type="submit" name="logout" class="btn btn-dark sub-btn" value="Logout">
                                </form>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- END OF HEADER -->

                <!-- MAIN CONTAINER -->
                 <?php
                    session_start();
                    $name = $_SESSION['genre-value']; 
                ?>
                <h1 class="title"><?php echo $name; ?> Movies</h1>
                <div class="card-container">
                        <?php
                            $name=$_SESSION['genre-value'];
                        ?>
                        <?php
                            if($_SESSION['username'])
                            {
                                $genre=$_SESSION['genre-value'];
                                $sql="SELECT * FROM movies where genre like '%$name%' ORDER BY year";
                                $result=mysqli_query($con,$sql);
                            
                            if($_SESSION['type']=='Admin')
                            {
                                while($row=mysqli_fetch_assoc($result))
                                {

                            echo '              
                            
                                <div class="card floatcard"  >
                                    <a href="#"><img src="'.$row['image'].'" class="card-img" alt=""></a>
                                    <div class="card-body">
                                        <h2 class="name"style="margin-left: 10px;">'.$row['mov_name'].'</h2>
                                        <h5 class="year" style="margin-left:7px;">'. $row["year"]. '</h5>
                                        <h5 class="imdb">'. $row["imdb"]. '</h5>
                                        <h5 class="rate">'. $row["rating"]. '</h5>
                                        <h5 class="dur">'. $row["duration"]. 'min</h5>
                                        <h6 class="des" style="margin-left: 10px;">'.$row['description'].'</h6>
                                       <form action="edit.php" method="POST">
                                            <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                                                <option  class="form-style">'.$row['mov_id'].'</option>
                                            </select>
                                            <input type="submit"  class="btn btn-dark" style="margin-bottom: 2%; left:3.5%; top: 10px; position: relative; background-color:black" value="Edit">
                                        </form>
                                    </div>
                                </div>
                        
                            ';

                            }

                            }
                            
                            else{
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    echo '
                                        
                                        <div class="card floatcard"  >
                                            <a href="#"><img src="'.$row['image'].'" class="card-img" alt=""></a>
                                            <div class="card-body">
                                                <h2 class="name" style="margin-left: 10px;">'.$row['mov_name'].'</h2>
                                                <h5 class="year" style="margin-left:7px;">'. $row["year"]. '</h5>
                                                <h5 class="imdb">'. $row["imdb"]. '</h5>
                                                <h5 class="rate">'. $row["rating"]. '</h5>
                                                <h5 class="dur">'. $row["duration"]. '</h5>
                                                <h6 class="des" style="margin-left: 10px;">'.$row['description'].'</h6>
                                                <form action="rate.php" method="POST">
                                                    <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                                                    <option  class="form-style">'.$row['mov_id'].'</option>
                                                    </select>
                                                    <input type="submit"  class="btn btn-dark" name="rate_id" style=" background-color:black" value="Rate">
                                                </form>
                                            </div>
                                        </div>
                                   
                                    ';
                            }
                        }
                            }
                            

                        ?> 
                </div>
                           

</body>
</html>

