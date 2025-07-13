<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css" type="text/css"> 
    <title>EDIT</title>
</head>
<body>
    <?php 
   
    $id=$_POST["mov-value"];
    
    ?>
     <?php
     include "_dbmovconnect.php";
    if(isset($_POST['id']))
    {
        
        $sql="DELETE FROM movies WHERE mov_id='$id'";
        $con->query($sql);
        echo "<div class='alert'>deleted</div>";
        if($con->query($sql)){
            $_SESSION['delete']="deleted successfully";
            // $sql ="INSERT INTO movies (image) VALUES('$folder')";
            header("location: welcome.php");
            exit;
              
             }
        
    }
    ?>
   <div class="container">
      <p>  Do you want to Update or Delete this Movie ..</p>
      <div class="sub">
        <form action="mov_update.php" method="post">
            <select name="mov-id" id="select-val"  style="position: relative; color:black; display:none;" required>
                <option  class="form-style"><?php echo $id;?></option>
            </select>
            <input type="submit" name="id"class="btn1" value="Update" style="cursor:pointer;">
        </form>
        <form action="edit.php" method="post">
            <select name="mov-value" id="select-val"  style="position: relative; color:black; display:none;" required>
                <option  class="form-style"><?php echo $id;?></option>
            </select>
            <input type="submit" class="btn2" name="id" value="Delete" style="cursor:pointer;">
        </div>
    </div>
    </form>
    
    
</body>
</html>