<?php include "connect.php";?>
<html>

<head>

</head>

<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_GET["username"]); // 2. นำค่าpidที่ส่งมากับurlกำหนดเป็นเงื่อไข
        $stmt->execute(); // 3. เริ่มค ้นหา
        $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข ้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
    
        
    ?>
    <div style="display:flex">
        <div>
            <img src='<?=$row["username"]?>.jpg' width='100'>
        </div>
        <div style="padding: 15px">
            <h2><?=$row["name"]?></h2>
            ที่อยู่ : <?=$row["address"]?><br>
            อีเมล์ <?=$row["email"]?><br>
            
        </div>
    </div>


</body>

</html>