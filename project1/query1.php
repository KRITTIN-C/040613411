<?php include "db.php";?>
<html>
<head>
    <link rel="stylesheet" href="query1.css">
</head>

<?php


        $stmt = $pdo->prepare("SELECT cars.group,cars.car_id, cars.car_brand, cars.license_plate, COUNT(tickets.ticket_id) AS count 
        FROM  cars LEFT JOIN tickets ON cars.car_id = tickets.car_id
        GROUP BY cars.car_id, cars.car_brand"); //QUERY

        $stmt->execute();
        while ($row = $stmt->fetch()) : ?>
        <article>
            <?=
            $car_id = $row['car_id'];
            $car_brand = $row['car_brand'];
            $license_plate1 = $row['license_plate'];
            $ticket_count = $row['count'];
            ?>
            
            
            
            <?php echo "<b>CarNumber: $car_id<br></b>"; //SHOW IN WEB?>
            <?php  echo "car_brand: $car_brand<br>"; ?>
            <?php  echo "license_plate: $license_plate1<br>";?>
            <?php
                if($row['group'] == 2){
                     echo "<b>รถจาก ระยอง</b>" ;
                }else{
                      echo "<b>รถจาก กรุงเทพ</b>" ;
                }?>
                
                <?php  echo "<br><b>ถูกใช้งาน: $ticket_count รอบ</b><br>";?>


       </article>
       <?php endwhile ?><a href="adminpage.php"><input type='submit' value="ย้อนกลับ" class="back"></a>