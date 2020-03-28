<?php 
  require('connect.php');
  $sql = "SELECT * FROM url ";
  $result = mysqli_query($conn, $sql);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>stadium</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="homepang.css">
  <link rel="stylesheet" href="stadium.css">

  <head>

  </head>

<body>

  <div class="header">
    <h1></h1>
    <img src="logo-leisure.png" alt=" " width="300" height="58.72">
  </div>

  <div class="topnav">
    <a href="homepang.php">หน้าหลัก</a>
    <a class="active" href="#บริการสนาม">ดูสนามกีฬา</a>
    <form action="logout.php">
      <button type="submit" class="button">Logout</button>
    </form>

  </div>
  <!--Product Card-->

  <script>
    function myfunction() {
      window.open("basketball.php")
    }
  </script>

  </div>
  <?php
echo '<div class="row">' ;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="column">';
    echo '<img src="'.$row['location'].'" style="width:250px; height:150px; ">';
    $_SESSION['location'] = $row['location'];
    echo'<h1 >'.$row['name'].'</h1>';
    $_SESSION['name'] = $row['name'];
    echo '<p class="Artist"></p></br>';
    echo '<p>'.$row['number'].'</p></br>';
    if($row['state']=='0'){echo "<font color='green'> ว่าง </font></br>" ;}
    else{echo "<font color='red'> ไม่ว่าง </font></br>" ;}
    echo '<p><button onclick="myfunction()" class="button">ดูสนามกีฬา</button></p>';
    echo '</div>' ;
  }
} else {
  echo "0 results";
}
echo '</div>' ;
  ?>

  </div>
</body>

</html>