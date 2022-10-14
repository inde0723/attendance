<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
    <head>
        <meta charset="utf-8">
        <title>老師頁面</title>
        <link rel="stylesheet" href="QQ.css">
    </head>
    <body class = "QQ">
    <div id = "header">
    <?php 
        $server = "localhost";
        $user = "root";
        $pass = "1234";
        $database = "nnnnnnn";
        $connection = new mysqli($server, $user, $pass, $database);

        $usern = $_SESSION['user'];

        echo $_SESSION['user'];
        echo '<a href="logout.php">登出</a>  <br><br>';
        
    ?>

     <form name="form" >
         <br><br><a href="stu_info.php">查看學生資料</a>
         <br><br><a href="callfinishinfo.php">查看已打卡學生</a><br><br>
         <br><br><a href="tcpw.php">修改密碼</a>
         <br>
     </form>
    </div>
    </body>
</html>