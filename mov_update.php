<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/mov_update.css">
    <title>Update Form</title>
</head>
<body>
 <?php 
include "_dbmovconnect.php";
  $id="";
  $m_name="";
  $m_desc="";
  $m_actor="";
    $m_actress="";
    $m_director="";
    $m_img="";
    $m_yr="";
    $m_rating="";
    $m_dur="";
    $m_imdb="";
    $m_genre="";
    $m_lan="";
   if(isset($_POST["id"])){
    $id=$_POST["mov-id"];
    $sql = "SELECT * FROM movies WHERE mov_id='$id'";
             $result1 = $con->query($sql);

             if ($result1->num_rows > 0) {

               while($row1 = $result1->fetch_assoc()) {

               
    $m_name=$row1["mov_name"];
    $m_desc=$row1["description"];
    $m_actor=$row1["actor"];
    $m_actress=$row1["actress"];
    $m_director=$row1["director"];
    $m_img=$row1["image"];
    $m_yr=$row1["year"];
    $m_rating=$row1["rating"];
    $m_dur=$row1["duration"];
    $m_imdb=$row1["imdb"];
    $m_genre=$row1["genre"];
    $m_lan=$row1["language"];
    
               }
               }
   }
//    
//    
   ?>
    
     <div class="container">
    <div class="title">Update Form of movie id : <?php echo $id;?></div>
    <div class="content">
    <form action="mov_update.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
           <div class="input-box">
            <span class="details">Movie Name</span>
            <input type="text" name="mov_name" placeholder="" value="<?php echo $m_name;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <textarea name="description" placeholder="" value="<?php echo $m_desc;?>" required></textarea>
          </div>
          <div class="input-box">
            <span class="details">Actor</span>
            <input type="text" name="actor" placeholder="" value="<?php echo $m_actor;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Actress</span>
            <input type="text" name="actress"placeholder=""value="<?php echo $m_actress;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Director</span>
            <input type="text" name="director" placeholder=""value="<?php echo $m_director;?>" required>
          </div> 
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" value="<?php echo $m_img;?>" required>
          </div>
           <div class="input-box">
            <span class="details">Year</span>
            <input type="number" name="year" placeholder=""value="<?php echo $m_yr;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Rating</span>
            <input type="text" name="rating" placeholder="" value="<?php echo $m_rating;?>"required>
          </div>
          <div class="input-box">
            <span class="details">Duration</span>
            <input type="text" name="duration" placeholder=""value="<?php echo $m_dur;?>" required>
          </div>
          <div class="input-box">
            <span class="details">IMDB</span>
            <input type="number" step=0.1 name="imdb" placeholder=""value="<?php echo $m_imdb;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Genre</span>
            <input type="text" name="genre" placeholder="" value="<?php echo $m_genre;?>"required>
          </div>
          <div class="input-box">
            <span class="details">Language</span>
            <input type="text" name="language" placeholder="" value="<?php echo $m_lan;?>"required>
          </div> 
        </div>
      
        
   

        <select name="mov-id" id="select-val"  style="position: relative; color:black; display:none;" required>
                <option  class="form-style"><?php echo $id;?></option>
                </select>
                <div class="button">  <input type="submit" name="submit"  value="Update"></div>
    </form>
    </div>
  </div> 
   <?php
   
          // echo '<div class="alert">'. $id.' </div>';
    if(isset($_POST["submit"])){
         $m_id=$_POST["mov-id"];
    //     echo $m_id;
     $mov_name=$_POST["mov_name"];
     $desc=trim($_POST["description"]);
     $actor=$_POST["actor"];
     $actress=$_POST["actress"];
     $director=$_POST["director"];
    $img= $_FILES["image"]["name"];
    $tempimg= $_FILES["image"]["tmp_name"];
    $folder="images/".$img; 
    move_uploaded_file($tempimg,$folder);

     $year=$_POST["year"];
     $rating=$_POST["rating"];
     $duration=$_POST["duration"];
     $imdb=$_POST["imdb"];
     $genre=$_POST["genre"];
     $language=$_POST["language"];

    
     $sql="UPDATE `movies` set mov_name='$mov_name',description='$desc', actor='$actor' ,actress='$actress',director='$director',image='$folder', year='$year',rating='$rating',duration='$duration',imdb='$imdb',genre='$genre',language='$language' WHERE mov_id='$m_id'";
    
   if($con->query($sql)){
    $_SESSION['update']="updated successfully";
  // $sql ="INSERT INTO movies (image) VALUES('$folder')";
  header("location: welcome.php");
  exit;
    
   }
}
    ?>
</body>
</html>