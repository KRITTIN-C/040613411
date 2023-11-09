<?php include "connect.php";?>
<html>
    <head>
        
    </head>
    <body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member");

        $stml->execute();
        
        while($row = $stml->fetch()){
          
            echo "ชื่อสมาชิก: ".$row["name"]."<br>";
            echo "ที่อยู่: ".$row["address"]."<br>";
            echo "อีเมล์: ".$row["email"]."<br>";
            echo "<img src='".$row["username"].".jpg' width='100'>";
            
            echo "<hr/n>";
        }
    ?>
    

    
    </body>
</html>