<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // php varibles begins with a dolar sign

        // Integers
        $num1 = 10;
        $num2 = 10;

        // Strings
        $name = "Alex Mwangi";

        $age = $num1 + $num2;

        echo "My name is " .  $name . ". <br>I'm " . $age . " years old <br>";

        //  DataTypes
        $x = 5;
        var_dump($x);

        // Global variables
        $x = 15; 

        function test() {
          // using x inside this function will generate an error
        //   echo "<p>Variable x inside function is: $x </p>";
        }
        test();
        
        echo "<p>Variable x outside function is: $x</p>";

        // local varibles

        function test2() {
            $y = 10;
            echo "<p>Variable inside a function is : $y</p>";
        }
        test2();
        // This will generate an error
        // echo "<p>Variable outside a function is : $y</p>";
    ?>
</body>
</html>