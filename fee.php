<html><head><style>
    <link rel="stylesheet" type="text/css" href="style.css">
    div{
    height: 50px;
    width:50px;
    border: 3px solid red;
    background-color:white;
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    margin: 0%;
    opacity:70%;
}
body {
            font-family: Arial, sans-serif;
            background-color: #427ab6;
            
      
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:url(feeee.jpg) ;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            animation: change 10s  infinite ease-in-out;
        }
        @keyframes change {
            0% {
                background-image: url(feeee.jpg);
            }
            40% {
                background-image:url(feee1.jpg) ;
            }
            80% {
                background-image: url(fee2.jpg);
            }
            100% {
                background-image: url(fee3.jpg) ;
            }
        }
th{
    color:red;
}
div{
    background-color:white;
    width:500px;
}
</style></head>
    <body>
        <img src="th.jpg" class="hello"><br>
    <button class="b"><a href="logout.php">Logout</a></button><center>
<?php
session_start();
$con=mysqli_connect("localhost","root","","studentlogin");
$uuname=$_SESSION['user_name'];
$sql = "SELECT * FROM userfees where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?><div style="background-color:white">
        <table  style="font:red">
        <tr><th rowspan="1" ><h1>NAME : <?php echo $row['name'];?></h1></th></tr>
    <tr><td><h1><?php echo "TUTION FEE"?> </h1></td><td><h2><?php echo $row['f1']; ?></h2></td></tr>
    <tr><td><h1><?php echo "EXAM FEE"?> </h1></td><td><h2><?php echo $row['f2']; ?></h2></td></tr>
    <tr><td><h1><?php echo "BOOK FEE "?></h1> </td><td><h2><?php echo $row['f3']; ?></h2></td></tr>
    <tr><td><h1><?php echo "OTHER FEES"?></h1> </td><td><h2><?php echo $row['f4']; ?></h2></td></tr>
    <tr><th><h1><?php echo "GROSS TOTAL "?></h1> </th><th><h2><?php echo $row['f5']; ?></h2></th></tr>
    </table></div>
  <?php }
}
else{
    echo "record not found";
}
?></center>
    <button class="b"><a href="home2.php">BACK</a></button></head></html>