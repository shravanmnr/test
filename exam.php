<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" id="name">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
<?php
include('dbconnect.php');

if(isset($_POST['submit']))
{
    $n=mysqli_real_escape_string($conn,$_POST['name']);
    $sql=("insert into student(name) values ('$n')");
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo("submitted successfully");
    
    }
    else
    {
        echo "error".$sql."<br>".mysqli_error($conn);
    }

}
?>