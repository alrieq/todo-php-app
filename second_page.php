<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./style.css">
    <title>Finished tasks</title>
</head>
<body>
<?php 
    // enable mysql error reporting for debugging only
    // $driver = new mysqli_driver();
    // $driver->report_mode = MYSQLI_REPORT_ALL;
    require_once('./db_connection.php');
    require('./finished_todos.php');
?>
<div id='content'>
    <h1>Finished tasks</h1>
    <a href="./index.php" class="btn">Home Page</a>
    <?php finished_todos();?>
</div>
    
</body>
</html>