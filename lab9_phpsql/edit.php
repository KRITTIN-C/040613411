<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE member SET `username`=?,`password`=?,`name`=?,`address`=?,`mobile`=?,`email`=? WHERE username=?");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->bindParam(7, $_POST["username1"]); //ถ้าไม่มีตัวนี้จะไม่สามารถแก้ไขข้อมูลที่ส่งมาได้
// $stmt->execute(); // เริ่มเพิ่มข้อมูล
//$username = $_POST["username"];

// header("location: workshop5.1.php?username=".$_POST["username"]); // กลับไปแสดงผลหน้าข้อมูล
if ($stmt->execute()) // เริ่มแก้ไขข้อมูล หากแก้ไขส าเร็จเงื่อนไขจะเป็ นจริง
    echo "แก้ไขสนค้า ิ " . $_POST["username"] . " ส าเร็จ";



// if ($stmt->execute()) // เริ่มแก้ไขข้อมูล หากแก้ไขส าเร็จเงื่อนไขจะเป็ นจริง
//     header("location: workshop5.1.php?username=".$_POST["username"]); // กลับไปแสดงผลหน้าข้อมูล
?>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

</body>

</html>