<html>
    <head>
        <style>
            body{
                background-color: bisque;
            }
              div{
                border: 20px;
                margin: auto;
                height:fit-content;
                width: fit-content;
                background-color: chartreuse;
              }
        </style>
    </head>
    <body ><?php
    session_start();?>
      <img src="th.jpg" class="hello"><br>
      <button class="b"><a href="logout.php">Logout</a></button>
      <center>
        <h1><?php echo "WELCOME PROCTOR " . $_SESSION['name'];?> 
        <p>TO ADD    STUDENT</p><br><p><div> <a href="student.html" ><img src="addstd.jpeg"></a></div></p><br><br><br>
        <p>TO DELETE STUDENT</p><br><p><div> <a href="studentdel.html" ><img src="delstd.jpeg"></a></div></p><br><br><br>
        <p>TO UPDATE STUDENT</p><br><p><div> <a href="#" ><img src="updstd.jpeg"></a></div></p><br><br><br>
    </center>
    </body>
</html>