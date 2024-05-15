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
}
body {
            font-family: Arial, sans-serif;
            background-color: #427ab6;
            
      
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:url(res1.jpg) ;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            animation: change 10s  infinite ease-in-out;
        }
        @keyframes change {
            0% {
                background-image: url(res1.jpg);
            }
            40% {
                background-image:url(res2.jpg) ;
            }
            80% {
                background-image: url(res3.jpg);
            }
            100% {
                background-image: url(res4.jpg) ;
            }
        }
g{
    color:blue;
}
h2{
    color:brown;
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
$sql = "SELECT * FROM userresult where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?><div style="background-color:white">
        <table  style="font:red">
        <tr><th rowspan="1" ><h1>NAME : <?php echo $row['name'];?></h1></th></tr>
    <tr><th><h2> SUBJECT</h2> </th><th><h2> GRADE</h2> </td></th>
    <tr><td><g><?php echo "MATHEMATICS"?></h1> </td><td><h2><?php echo $row['SUB1']; ?></h2></td></tr>
    <tr><td><g><?php echo "MICRO CONTROLLER "?> </h1></td><td><h2><?php echo $row['SUB2']; ?></h2></td></tr>
    <tr><td><g><?php echo "COMPUTER ORGANISATION AND ARCHITECTURE "?></h1> </td><td><h2><?php echo $row['SUB3']; ?></h2></td></tr>
    <tr><td><g><?php echo "PYTHON PROGRAMMING"?> </h1></td><td><h2><?php echo $row['SUB4']; ?></h2></td></tr>
    <tr><td><g><?php echo "DESIGN ANALYSIS AND ALGORITHM "?></h1> </td><td><h2><?php echo $row['SUB5']; ?></h2></td></tr>
    <tr><td><g><?php echo "INDIAN CONSTITUTIONS "?></h1>  </td><td><h2><?php echo $row['SUB6']; ?></h2></td></tr>
    <tr><td><g><?php echo "C# "?> </td><td><h2><?php echo $row['SUB7']; ?></h2-></td></tr>
    </table></div>
  <?php }
}
else{
    echo "record not found";
}
?></center>
 
    <button class="buttons"><a href="home2.php">BACK</a></button></head></html>