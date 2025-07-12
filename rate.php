<?php
session_start();
include "_dbmovconnect.php";

$id = "";
$m_name = "";
$m_desc = "";
$m_actor = "";
$m_actress = "";
$m_director = "";
$m_img = "";
$m_yr = "";
$m_rating = "";
$m_dur = "";
$m_imdb = "";
$m_genre = "";
$m_lan = "";

if (isset($_POST["rate_id"])) {
    $id = $_POST["mov-value"];
    $sql = "SELECT * FROM movies WHERE mov_id='$id'";
    $result1 = $con->query($sql);

    if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
            $m_name = $row1["mov_name"];
            $m_desc = $row1["description"];
            $m_actor = $row1["actor"];
            $m_actress = $row1["actress"];
            $m_director = $row1["director"];
            $m_img = $row1["image"];
            $m_yr = $row1["year"];
            $m_rating = $row1["rating"];
            $m_dur = $row1["duration"];
            $m_imdb = $row1["imdb"];
            $m_genre = $row1["genre"];
            $m_lan = $row1["language"];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/rate.css">
    <title>Rating Movie..</title>
</head>
<body>
    <div class="container">
        <div class="title"><h3>Rating Movie..</h3></div>
        <div class="box">
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="<?php echo $m_img; ?>" alt="img" class="image">
                </div>
                <div class="col-lg-6">
                    <h6 style="margin-top:1%;"><b>Movie:</b> <?php echo $m_name; ?></h6>
                    <h6><b>Cast:</b> <?php echo $m_actor; ?>, <?php echo $m_actress; ?></h6>
                    <h6><b>Director:</b> <?php echo $m_director; ?></h6>
                    <h6><b>Info:</b> <?php echo $m_lan; ?> <?php echo $m_yr; ?> <?php echo $m_genre; ?></h6>
                    <h6><b>Description:</b> <?php echo $m_desc; ?></h6>
                </div>
            </div>
        </div>

        <form action="rate.php" method="POST">
            <input class="rate" type="number" name="rate" id="rate_id" placeholder="Rate the movie" min="1" max="10" step="0.1" required>
            <select name="mov-id" id="select-val"  style="position: relative; color:black; display:none;" required>
                <option  class="form-style"><?php echo $id;?></option>
            </select>
            <div class="button">
                <input type="submit" name="submit" value="Rate">
            </div>
        </form>
    </div>

    <?php
        if (isset($_POST["submit"])) {
            $rate_input = $_POST["rate"];
            $m_id = $_POST["mov-id"];
            
            $sql = "SELECT rating FROM movies WHERE mov_id='$m_id'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $m_rating = $row['rating'];
                
                $rate = ($m_rating + $rate_input) / 2;
                
                $sql = "UPDATE `movies` SET rating='$rate' WHERE mov_id='$m_id'";
                
                if ($con->query($sql) === TRUE) {
                    $_SESSION['update'] = "Rated successfully";
                    header("Location: welcome.php");
                    exit;
                } else {
                    echo "Error updating record: " . $con->error;
                }
            }
            header("Location: welcome.php");
        }
    ?>
</body>
</html>
