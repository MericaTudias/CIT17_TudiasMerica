<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Operator Types</title>
</head>
<body>
    <?php
        print("<br><strong>PHP- Operator Types</strong><br>");
        print("<br>");
        $a = 22;
        $b = 10;

        $c = $a + $b;
        print("$a + $b = $c <br>");
        echo "Addition Operation Result: $c <br/>";
        $c = $a - $b;
        print("$a - $b = $c <br>");
        echo "Subtraction Operation Result: $c <br/>";
        $c = $a * $b;
        print("$a * $b = $c <br>");
        echo "Multiplication Operation Result: $c <br/>";
        $c = $a / $b;
        print("$a / $b = $c <br>");
        echo "Division Opreration Result: $c <br/>";
        $c = $a % $b;
        print("$a % $b = $c <br>");
        echo "Modulus Operation Result: $c <br/>";
        $c = $a++;
        print("$a++ = $c <br>");
        echo "Increment Operation Result: $c <br/>";
        $c = $a--;
        print("$a-- = $c <br>");
        echo "Decrement Operation Result: $c <br/>";
    ?>
</body>
</html>