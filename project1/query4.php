<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
} else {
?>

    <head>
        <link rel="stylesheet" href="query4.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script>
            var httpRequest;

            function send() {
                httpRequest = new XMLHttpRequest();
                httpRequest.onreadystatechange = showResult;
                var a = document.getElementById("a").value;
                var b = document.getElementById("b").value;
                var url = "query4.1.php?a=" + a + "&b=" + b;
                httpRequest.open("GET", url);
                httpRequest.send();
            }


            function showResult() {
                if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                    document.getElementById("result").innerHTML = httpRequest.responseText;
                }
            }
        </script>
    </head>

    <body>
        <section>
            <form>
                เดือน <input type="text" id="a"><br>
                &ensp;&ensp;&ensp;ปี <input type="text" id="b" onclick="send()">
                <!-- <span id="result"></span> เอาค่ามาใส่ -->
            </form><a href="adminpage.php"><button>ย้อนกลับ</button></a>
        </section>
        <article>
            <span id="result"></span>
        </article>
        

    </body>


<?php } ?>