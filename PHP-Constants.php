<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Constants</title>
</head>
<body>
    <?php
     print("<br><strong> PHP- Constants </strong><br>");
     print("<br>");
     define("MINSIZE", 50);
     echo MINSIZE;
     echo constant("MINSIZE");

     print("<br>");
     print("<br><strong> Valid and Invalid Constant Names </strong><br>");
     print("<br>");
     print("<strong>Valid Constant Names</strong><br>");
     define("ONE", "first thing <br>");
     define("TWO2", "second thing <br>");
     define("THREE_3", "third thing <br>");
     echo ONE, TWO2, THREE_3;
     print("<br><strong>Invalid Constant Names</strong><br>");
     define("2TWO", "second thing <br>");
     define ("__THREE__", "third value");
     echo constant("2TWO");
     echo(__THREE__);
    ?>
</body>
</html>