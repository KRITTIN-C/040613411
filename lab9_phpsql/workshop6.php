<?php include "connect.php";?>
<html>

<head>

</head>

<body>
    <?php
// เตรียมคำสั่ง sql สำหรับลบข้อมูล

        $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
        $stmt->bindParam(1, $_GET["username"]); // ก าหนดค่าลงในต าแหน่ง ?
        if ($stmt->execute()) // เริ่มลบข้อมูล
            header("location: workshop5.0.php"); // กลับไปแสดงผลหน้าข้อมูล

?>
    
</body>

</html>