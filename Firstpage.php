<!DOCTYPE html>
 <html>
<head>
    <title>Login</title>
<style>
    <link rel="stylesheet" href="style.css">
body {
    font-family: Arial, sans-serif;
    background-color: #427ab6;
    

    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:url(bg1.jpg) ;
    background-position: center;
    background-repeat: repeat;
    background-size: cover;
    animation: change 10s  infinite ease-in-out;
}
@keyframes change {
    0% {
        background-image: url(bg1.jpg);
    }
    40% {
        background-image:url(bg2.jpg) ;
    }
    80% {
        background-image: url(bg3.jpg);
    }
    100% {
        background-image: url(bg4.jpg) ;
    }
}
 </style>
</head>
<body>
    <?php
<a href="Login">index.php</a>
?>
</body>
</html>
