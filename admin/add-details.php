<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
    exit();
}
$uid = $_SESSION['admin'];
include 'config.php';
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $sql = "INSERT INTO employees (emp_id, first_name, last_name) VALUES ('$id', '$first_name', '$last_name')";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "Record added successfully";
        header("Location:index.php");
    } else {
        echo "Error adding record: " . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        body {
        background-image: url('backk.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        }
        .container {
        padding: 5px 0;
        opacity: 70%;
        width: 50%;
        }
        form {
        background: #142a58;
        box-shadow: 0 0 3em black;
        padding: 1em;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        border-radius: 20px;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 1em;
        height: 50%;
        margin-top: 1em;
        }
        .formcontainer {
        background: #142a58;
        border: 2px gray;
        padding: 1em;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        border-radius: 20px;
        margin-top: -3em;
        margin: 50px;
        margin-bottom: 20px;
        width: 88%;
        }
        input[type="text"], input[type="password"] {
        width: 80%;
        padding: 10px 8px;
        margin: 8px 0;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 10px;
        color: white;
        }
        .input-group {
        display: block;
        }
        h1 {
        text-align:center;
        font-size: 18;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #0b3f50;
        }
        .action_btn {
        display: flex;
        gap: 2em;
        justify-content: right;
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
        button:hover {
        opacity: 0.8;
        }
        #footer {
        background: #142a58;
        text-align:center;
        padding:10px;
        margin-top:7px;
        font-size:15px; 
        border-radius: 10px;
        color: white;
        width: 98%;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="action_btn">
            <a href="index.php"><button>View Users</button></a>
            <a href="logout.php"><button>Logout</button></a>
        </div>
        <form action="" method="POST">
        <h1>Add User</h1>
            <div class="formcontainer">
            <div class="input-group">
                <label for="id">ID</label><br>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="input-group">
                <label for="first_name">First Name</label><br>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="input-group">
                <label for="last_name">Last Name</label><br>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            </div>
            <div style="text-align: center; width:600px;">
            <button type="submit" name="add">Add User</button></div>
        </form>
        <div id="footer">Designed By Sejal</div>
    </div>
</body>
</html>