<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<html>
    <head>
        <meta charset="utf-8">
        <title>課程資料/打卡</title>
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
        $result = $connection -> query("SELECT * FROM class ");

        foreach($result as $i){
            echo "NO . $i[NO]&nbsp;&nbsp;&nbsp;課程名 : $i[name]&nbsp;&nbsp;&nbsp;&nbsp;授課老師 : $i[t_name]  ";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;學分數 : $i[credit] ";
            echo '<br>';
        }
    ?>

     <form name="form" method="post" action="callfinish.php">
         
         <br><br><br><p>課堂打卡請點</p>
         <input type="submit" name="button" value="打卡"/>
         <a href="student.php">上一頁</a>
         <br>
     </form>
    </div>
    </body>
</html>