<?php include "connect.php" ?>
<?php
// 1. กำหนดคำสั่ง sql ให้ดึงสินค้าตามรหัสสินค้า

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); // 2. นำค่าusernameที่ส่งมากับurlกำหนดเป็นเงื่อนไข
$stmt->execute(); // 3. เริ่มค้นหา
$row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="edit.php" method="POST">
        username : <input type="text" name="username" value ="<?=$row["username"]?>"><br>
        password : <input type="text" name="password" value ="<?=$row["password"]?>"><br>
        name : <input type="text" name="name" value ="<?=$row["name"]?>"><br>
        address : <input type="text" name="address" value ="<?=$row["address"]?>"><br>
        mobile : <input type="text" name="mobile" value ="<?=$row["mobile"]?>"><br>
        email : <input type="text" name="email" value ="<?=$row["email"]?>"><br>
        <input type="hidden" name="username1" value ="<?=$row["username"]?>">
        <input type="submit" value="edit">
    </form>
</body>

</html>