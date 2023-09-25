<?php include "connect.php";?>
<html>
    <head>

    </head>
    <body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM product");

        $stml->execute();
        echo "<table border = '1'>";
        echo "<tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>ราคา</th>
                    </tr>";
        while($row = $stml->fetch()){
            echo "<tr>";
            echo "<td>". $row["pid"]. "</td>";
            echo "<td>". $row["pname"]."</td>";
            echo "<td>". $row["pdetail"]."</td>";
            echo "<td>". $row["price"]."</td>";
            echo "</tr>";
        }
    ?>
      

    
    </body>
</html>