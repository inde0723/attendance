<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>登入畫面</title>
        <link rel="stylesheet" href="QQ.css">
    </head>
    <body class = "QQ">
    <div id = "header">
     <form name="form" method="post" action="connect.php">
         
         請選擇身分<br><br>
         <input type="radio" name="identity" value="Teacher"> 老師<br>
         <input type="radio" name="identity" value="Student"> 學生<br><br><br><br>
         <p>第一次登入帳號為學號，密碼預設1234，登入後盡快修改密碼</p>
         帳號：<input type="text"name="id" size="8">
         <br>
         密碼：<input type="password" name="pw" size="8"><br>
         <input type="submit" name="button" value="登入"/>
         <br>
     </form>   
    </div>
    </body>
</html>