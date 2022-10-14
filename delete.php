<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
    $server = "localhost";
    $user = "root";
    $pass = "1234";
    $database = "nnnnnnn";
    $connection = new mysqli($server, $user, $pass, $database);




    $connection -> query("DELETE FROM callstudent");
    echo '清空中!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=callfinishinfo.php>';

?>