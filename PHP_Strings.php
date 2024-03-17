<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Strings
        $first_name = "Alex";
        $last_name = "Mwangi";

        // print the names
        echo "Hello ". $first_name ." ". $last_name ;
        
        print("<br><br>");
        
        // CHeck the length of the name 
        echo strlen( $first_name );

        print("<br><br>");
        // search for a text in a paragraph
        echo strpos("Hello world. Welcome to Kibabii University" , "Kibabii");

        print("<br><br>");
        // Change string to uppercase
        echo strtoupper( "Hello php !")

    ?>
</body>
</html>