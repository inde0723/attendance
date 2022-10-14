<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<html>
    <head>
        <meta charset="utf-8">
        <title>打卡學生紀錄</title>
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
        $result = $connection -> query("SELECT * FROM callstudent");

        $result2 = $connection -> query("SELECT * FROM student WHERE id NOT IN (SELECT id FROM callstudent);");

        echo "已打卡學生:";
        echo '<br>';

        foreach($result as $i){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名 : $i[name] &nbsp;&nbsp; 學號 : $i[id]  ";
            echo '<br>';
        }

        echo '<br>';
        echo "未打卡學生:";
        echo '<br>';

        foreach($result2 as $j){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名 : $j[name] &nbsp;&nbsp; 學號 : $j[id]  ";
            echo '<br>';
        }

        
    ?>

     <form name="form" method="post" action="delete.php">
         <br><p>請老師登記完記得清空!</p>
         
         <br><input type="submit" name="button" value="清空"/>
         <a href="teacher.php">上一頁</a>
         <br>
     </form>
     </div>
    </body>
</html>
