<?php include "db.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="addtime.css">
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM cars");
    $stmt->execute();

    ?>
    <?php
    while ($row = $stmt->fetch()) : ?>
        <article>
            <form action="editcars.php" method="post">
                <input type='hidden' name='car_id' value=' <?= $row['car_id'] ?>'>
                <b>CarNumber : <?= $row['car_id'] ?></b> <br>
                Car_Brand :<?= $row['car_brand'] ?><br>
                Year :<?= $row['year'] ?><br>
                Available :<?= $row['available'] ?><br>
                License_Plate :<?= $row['license_plate'] ?><br>
                Depart_Time : <input type='text' name='depart_time' value='<?= $row['depart_time'] ?>'><br>
                Arrival_Time : <input type='text' name='arrival_time' value='<?= $row['arrival_time'] ?>'><br>
                <?php
                if ($row['group'] == 2) {
                    echo "<b>รถจาก ระยอง</b>";
                } else {
                    echo "<b>รถจาก กรุงเทพ</b>";
                }
                ?><br>
                <input type='submit' value="แก้ไข" class="edit">

                <!-- <hr> -->
            </form>
        </article>

    <?php endwhile ?>
    <a href="adminpage.php"><input type='submit' value="ย้อนกลับ" class="back"></a>
</body>

</html>