<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<html>
    <head>
        <meta charset="utf-8">
        <title>學生資料</title>
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
        $result = $connection -> query("SELECT * FROM student ");

        foreach($result as $i){
            echo "姓名 : $i[name]  學號 : $i[id]  性別 : $i[sex]  ";
            echo "生日 : $i[year] 年 $i[mon] 月 $i[day] 日";
            echo '<br>';
        }
    ?>
    
     
    <a href="teacher.php">上一頁</a><br><br>
      </div>
    </body>
</html>