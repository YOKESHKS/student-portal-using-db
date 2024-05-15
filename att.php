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
            background-image:url(att1.jpg) ;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            animation: change 10s  infinite ease-in-out;
        }
@keyframes change {
            0% {
                background-image: url(att1.jpeg);
            }
            40% {
                background-image:url(att2.jpeg) ;
            }
            80% {
                background-image: url(att3.jpeg);
            }
            100% {
                background-image: url(att1.jpeg) ;
            }
        }
div{
    background-color:white;
    width:500px;
}
h3{
    color:red;
}
</style></head>
    <body>
        <img src="th.jpg" class="hello"><br>
    <button class="b"><a href="logout.php">Logout</a></button><center>
<?php
session_start();
$con=mysqli_connect("localhost","root","","studentlogin");
$uuname=$_SESSION['user_name'];
$sql = "SELECT * FROM useratt where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?><div>
        <table>
        <tr><th rowspan="1" >NAME : <?php echo $row['name'];?></th></tr>
        <tr><th>SUBJECTS</th><th>PERCENTAGE</th></tr>
    <tr><td><h3><?php echo "SOFTWARE ENINEERING"?> </td><td><?php echo $row['s1']; ?></td></tr>
    <tr><td><h3><?php echo "THEORY OF COMPUTATION"?> </td><td><?php echo $row['s2']; ?></td></tr>
    <tr><td><h3><?php echo " DATABASE MANAGEMENT SYSTEM "?> </td><td><?php echo $row['s3']; ?></td></tr>
    <tr><td><h3><?php echo " WEB PROGRAMMING"?> </td><td><?php echo $row['s4']; ?></td></tr>
    <tr><td><h3><?php echo "AI "?> </td><td><?php echo $row['s5']; ?></td></tr>
    <tr><td><h3><?php echo "ENVIRONMENTAL SCIENCE "?> </td><td><?php echo $row['s6']; ?></td></tr>
    <tr><td><h3><?php echo "UNIVERSAL HUMAN VALUES "?> </td><td><?php echo $row['s7']; ?></td></tr>
    <tr><td><h3><?php echo "RESEARCH METHODOLOGY"?> </td><td><?php echo $row['s8']; ?></td></tr>
    </table></div>
  <?php }
}
else{
    echo "record not found";
}
?></center>
 
    <button class="b"><a href="home2.php">BACK</a></button></body></head></html>