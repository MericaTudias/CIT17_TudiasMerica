<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Variable Types</title>
</head>
<body>
    <?php
        print("<br><strong> PHP- Variable Types </strong><br>");
        print("<br><strong> Integers </strong><br>");
        $int_var = 6789;
        $another_int = -6789 + 6789; 
        echo($int_var);
        print("<br>");
        echo($another_int);
        print("<br>");

        print("<br><strong> Doubles </strong><br>");
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print("$many + $many_2 = $few <br>");

        print("<br><strong> Strings </strong><br>");
        $variable = "name";
        $literally = 'My $variable will not print! <br>';
        print($literally);
        $literally = "My $variable will print! <br>";
        print($literally);

        print("<br><strong> PHP Local Variables </strong><br>");
        $x = 4;
        function assignx () {
        $x = 0;
        print "\$x inside function is $x.
        ";
        }
        assignx();
        print "<br> \$x outside of function is $x.
        ";

        print("<br>");
        print("<br><strong> PHP Function Parameters </strong><br>");
        // Multiply a value by 10 and return it to the caller
        function multiply ($value) {
            $value = $value * 10;
            return $value;
        }

        $retval = multiply (10);
        print "Return value is $retval\n";

        print("<br>");
        print("<br><strong> PHP Global Variables </strong><br>");
        $somevar = 15;
        function addit() {
        GLOBAL $somevar;
        $somevar++;
        print "Somevar is $somevar";
        }
        addit();

        print("<br>");
        print("<br><strong> PHP Static Variables </strong><br>");
        function keep_track(){
            STATIC $count = 0;
            $count++;
            print $count;
            print "
        ";
        }
        keep_track();
        keep_track();
        keep_track();
    ?>
</body>
</html>