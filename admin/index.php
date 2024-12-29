<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
    exit();
}
include 'config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>View Users</title>
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      body {
      background-image: url('backk.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
      }
      form {
      background: #76abae;
      box-shadow: 0 0 3em black;
      padding: 1em;
      display: flex;
      flex-direction: column;
      gap: 0.5em;
      border-radius: 20px;
      color: white;
      margin-bottom: 1em;
      height: 1030px;
      margin-top: 0;
      }
      input[type=text], input[type=password] {
      width: 95%;
      padding: 10px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 10px;
      color: white;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #0b3f50;
      }
      button {
      background-color: #0b3f50;
      color: white;
      padding: 15px 15px;
      margin: 10px 20px;
      border: none;
      cursor: pointer;
      border-radius: 10px;
      width: 150px;
      margin: 0 auto;
      display: inline-block;
      text-align: center;  
      align-items: center;
      }
      .action_btn {
        display: flex;
        gap: 2em;
        justify-content: right;
      }
      h1 {
      text-align:center;
      font-size: 18;
      margin-top: 10px;
      margin-bottom: 10px;
      color: white;
      }
      h2 {
      text-align:center;
      font-size: 18;
      margin-top: 20px;
      color: gray;
      background: #dde5f4;
      border-radius: 20px;
      color: white;
      }
      button:hover {
      opacity: 0.9;
      }
      .formcontainer {
      background:#76abae;
      border: 2px gray;
      padding: 1em;
      display: flex;
      flex-direction: column;
      gap: 0.5em;
      border-radius: 20px;
      margin-top: -3em;
      margin: 50px;
      margin-bottom: 20px;
      }
      .container {
      padding: 5px 0;
      opacity: 70%;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      table {
            width: 100%;
            border-collapse: collapse;
            color: black;
            background-color: #76abae;
        }
      table, th, td {
            border: 1px solid black;
            border-top: none;
            border-bottom: 1px solid black;
        }
      th, td {
            padding: 0.8em;
            text-align: left;
        }
      th {
            background-color:#3c7e82;
            color: black;
        }
      #footer {
        background: #0b3f50;
        text-align:center;
        padding:10px;
        margin-top:7px;
        font-size:15px; 
        border-radius: 10px;
        color: white;
      }
    </style>
  </head>
<body>         
  <div class="container">  
    <div style="text-align: right;">
            <?php
            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {   
            }
            else {
                echo "<a href='add-details.php'><button>Add User</button></a>";
            }
            ?>
            <a href="logout.php"><button>Logout</button></a>
        </div>
        <h1>Users List</h1>
        <?php
        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>
            <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Contact details</th>
            <th>Knowledge</th>
            <th>About Me</th>
            <th>Action</th>
            </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["emp_id"]."</td>
                <td>".$row["first_name"]." ".$row["last_name"]."<br>".$row["designation"]."
                </td>
                <td>".$row["email"]."<br>".$row["phone_no"]."</td>
                <td>Skills: ".$row["skills"]."<br> Experience: ".$row["experience"]."<br> Projects: ".$row["projects"]."</td>
                <td>".$row["about_me"]."</td>
                <td><a href='edit.php?hi=".$row["emp_id"]."'>Edit</a>
                | <a href='delete.php'>Delete</a></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div> 
  </body>
</html>