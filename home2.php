<html><head><style>
    <link rel="stylesheet" type="text/css" href="style.css">
td{
    color:red;
    font: 400px;
}
h1{ 
    font-size:  30px;
}
h2{
    font-size:  30px;
    color:red;
}
img{
    width:px;
}
button{
    color:green;

}
    </style></head>
    <body>
        <img src="th.jpg" class="hello"><br>
   <div>
    <button class="b" style="color:red"><a href="logout.php">Logout</a></button></div><center>
<?php
session_start();
$con=mysqli_connect("localhost","root","","studentlogin");
$uuname=$_SESSION['user_name'];
$sql = "SELECT * FROM user where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?>
        <table cellspacing="10" cellpadding="10" font-size: 200px;>
            <h1>
             <tr><td><h1><?php echo "STUDENT NAME        :"?></h1> </td><td><h2><?php echo $row['name']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT USN          :"?> </td><td><h2><?php echo $row['usn']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT FATHER NAME  :"?> </td><h2><td><h2><?php echo $row['fathername']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT SEM          :"?> </td><td><h2><?php echo $row['sem']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT CGPA         :"?> </td><td><h2><?php echo $row['cgpa']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT BACKLOG      :"?> </td><td><h2><?php echo $row['back']; ?></h2></td></tr></h1>
            <tr><td><h1><?php echo "STUDENT MOBILE       :"?> </td><td><h2><?php echo $row['mobile']; ?></h2></td></tr></h1>
            <tr><td><h1>            PROCTOR              :</td><td><h2>               MR.KUMARSWAMY</h></td></tr><h2>
    </table>
  <?php }
}
else{
    echo "record not found";
}
?>
</center><center>
<table cellspacing="10" cellpadding="10"><tr><td><a href="res.php"width="5px" height="5px"><img src="result2.jpg" width="400px" height="200px" class="hello"></a></td><br><br><br><br><br><td><a href="fee.php"width="1500px" height="500px"><img src="fees.jpg"width="350px" height="150px" class="hello"></a><br></td><td><a href="att.php"><img src="attendance.jpg"width="350px" height="150px" class="hello"></a><br></td><br><br><br><br><br></tr><td><a href="libb.php"><img src="lib.jpg" width="400px" height="200px"class="hello"></a><br></td><td><a href="quizz.html"><img src="quiz.jpeg" width="400px" height="200px"class="hello"></a><br></td><td><a href="PROCTORR.html"><img src="proctor.jpeg" width="400px" height="200px"class="hello"></a><br></td></tr></table></center></body></html>