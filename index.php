<?php
include 'config.php';

$sql = "SELECT * FROM employees WHERE emp_id = '18105'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="heading">
  <img src="author-image.jpg" class="image">
  <h1><?php echo $row['first_name'] ." ". $row['last_name']; ?><br><p class="p1"><?php echo $row['designation']; ?></p></h1>
</div>
<div style="overflow:auto">  
  <div class="menu">
    <h2>Skills</h2>
    <div class="menuitem"><?php echo $row['skills']; ?></div>
  </div>
  <div class="main">
    <h2>About Me</h2>
    <p><?php echo $row['about_me']; ?></p>
    <h3>MY CERTIFICATES</h3>
    <div id="frame">
        <input type="radio" name="frame" id="frame1" checked />
        <input type="radio" name="frame" id="frame2" />
        <input type="radio" name="frame" id="frame3" />
        <input type="radio" name="frame" id="frame4" />
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="frame">
                        <img src="certificate1.png">
                    </div>
                    <div class="frame">
                        <img src="certificate2.png">
                    </div>
                    <div class="frame">
                        <img src="certificate3.png">
                    </div>
                    <div class="frame">
                        <img src="certificate4.png">
                    </div>                    
                </div>
            </div>
        </div>
        <div id="controls">
            <label for="frame1"></label>
            <label for="frame2"></label>
            <label for="frame3"></label>
            <label for="frame4"></label>
        </div>
        <div id="bullets">
            <label for="frame1"></label>
            <label for="frame2"></label>
            <label for="frame3"></label>
            <label for="frame4"></label>
        </div>
    </div>
  </div>
  <div class="right">
    <div class="right1"><h2>Experience</h2>
    <p><?php echo $row['experience']; ?></p></div>
    <div class="right2"><h2>Course</h2>
    <p><?php echo $row['course']; ?></p></div>
    <div class="right3"><h2>Projects</h2>
    <p><?php echo $row['projects']; ?></p></div>
  </div>
</div>
    <div class="footer"> Designed And Developed By <?php echo $row['first_name'] ." ". $row['last_name']; ?></div>
</body>
<script src="script.js"></script>
</html>