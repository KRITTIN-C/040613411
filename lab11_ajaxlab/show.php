<?php include "connect.php" ?>
<?php
    $name = $_GET['name'];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username='$name'");
    $stmt->execute();
    $row = $stmt->fetch();
    echo "username : ".$row['username']."<br>";
    echo "password : ".$row['password']."<br>";
    echo "name : ".$row['name']."<br>";
    echo "address : ".$row['address']."<br>";
    echo "mobile : ".$row['mobile']."<br>";
    echo "email : ".$row['email']."<br>";
    echo "<img src='".$row['username'].".jpg'>";
    ?>