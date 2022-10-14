<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<html>
    <head>
        <meta charset="utf-8">
        <title>學生頁面</title>
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
        $result = $connection -> query("SELECT * FROM student where id = '$usern'");

        foreach($result as $i){
            echo "姓名 : $i[name]  學號 : $i[id]";
        }
    ?>

     <form name="form" >
         <br><br><a href="change_pw.php">修改密碼</a>
         <br><br><a href="infor.php">個人資料查看/編輯</a><br><br>
         <a href="class.php">查詢課程/打卡</a><br><br>

         
         <br>
     </form>   
     </div>
    </body>
</html>