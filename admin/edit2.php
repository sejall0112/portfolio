<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
    exit();
}
$emp_id = $_GET['hi'];
include 'config.php';

if (isset($_POST['update'])) {
    $emp_id = $_POST['emp_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE employees SET emp_id=$emp_id, first_name=$first_name, last_name=$last_name WHERE emp_id=$emp_id");
    $stmt->bind_param("ssi", $emp_id, $first_name, $last_name);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location:index.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
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
        .formcontainer {
        background: #76abae;
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
        form {
        background: #76abae;
        box-shadow: 0 0 3em black;
        padding: 1em;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        border-radius: 20px;
        color: black;
        margin-bottom: 1em;
        height: 65%;
        margin-top: 1em;
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
        .input-group {
            display: block;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"]{
        width: 90%;
        padding: 10px 8px;
        margin: 8px 0;
        border: none;
        box-sizing: border-box;
        border-radius: 10px;
        color: white;
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
        background:#0b3f50;
        text-align:center;
        padding:10px;
        margin-top:7px;
        font-size:15px; 
        border-radius: 10px;
        color: white;
        width: 97%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="action_btn">
            <a href="index.php"><button>View Users</button></a>
            <a href="logout.php"><button>Logout</button></a>
        </div>
        <?php
        $sql = "SELECT * FROM employees WHERE emp_id='$emp_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <form action="" method="POST">
        <h1>Update User</h1>
        <div class="formcontainer">
            <div class="input-group">
                <label for="emp_id">Employee ID</label>
                <input type="input" id="emp_id" name="emp_id" readonly value="<?php echo $row['emp_id']; ?>">
            </div>
            <div class="input-group">
                <label for="first_name">First Name</label>
                <input type="input" id="first_name" name="first_name" required value="<?php echo $row['first_name']; ?>">
            </div>
            <div class="input-group">
                <label for="last_name">Last Name</label>
                <input type="input" id="last_name" name="last_name" required value="<?php echo $row['last_name']; ?>">
            </div>
            </div>
            <div style="text-align: center; width:600px;">
            <button type="submit" name="update">Update User</button></div>
        </form>
        <div id="footer">Designed By Sejal</div>
    </div>
</body>
</html>