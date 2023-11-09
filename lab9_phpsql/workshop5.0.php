<?php include "connect.php";?>
<html>

<head>

</head>

<body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member");

        $stml->execute();
        
       
    ?>
    <?php while($row = $stml->fetch()):?>
    ชื่อสมาชิก:<?=$row["name"]?><br>
    ที่อยู่:<?=$row["address"]?><br>
    อีเมล์:<?=$row["email"]?><br>

    <a href="workshop5.1.php?username=<?=$row["username"]?>">
        <img src='<?=$row["username"]?>.jpg' width='100'>
    </a><br>
    <a href="workshop9.php?username=<?=$row["username"]?>">
        Edit |
    </a>
    <a href="workshop6.php?username=<?=$row["username"]?>">
        Delete
    </a><br>
    
    <hr>
    <?php endwhile?>
    <!-- สามารถเปลี่ยนworkshop7 ได้ตรงaction -->
    <form action="workshop8.php" method="post"> 
        username : <input type="text" name="username"><br>
        password : <input type="text" name="password"><br>
        name : <input type="text" name="name"><br>
        address : <input type="text" name="address"><br>
        mobile : <input type="text" name="mobile"><br>
        email : <input type="text" name="email"><br>
        <input type="submit" name="add" value ="add">
    </form>
        
</body>

</html>