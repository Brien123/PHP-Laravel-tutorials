<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Project</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <?php
    echo "This is my first PHP project!<br>";

    //PHP case sensitivity
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";

    // variables are case sensitive though
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    // variable scope
    $x = 5;  //global scope
    function test(){
        echo "The value for x is $x<br>"; 
    }

    test(); /* the value for x wont be printed here, this is because In PHP, 
    variables defined outside of a function have a global scope, and they are 
    not accessible inside functions unless explicitly specified. In your example, 
    the variable $x is defined in the global scope, but the function test() does 
    not have access to it because $x is not declared as a global variable inside the function.*/

    function test2(){
        global $x;
        echo "The value for x is $x<br>";
    }
    test2(); // the value of x will now be printed here


    // The static keyword
    /*Normally, when a function is completed/executed, all of its variables are deleted. However, 
    sometimes we want a local variable NOT to be deleted. We need it for a further job.*/

    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }
      
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      myTest(); 
      echo "<br>"; // Each time the function is called, that variable will still have the information it contained from the last time the function was called.      

    // DataTypes
    /*Variables can store data of different types, and different data types can do different things.

    PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
    */

    $y = 5;
    echo var_dump($y);  //The var_dump() function returns the data type and the value:
    echo "<br>";

    $a = "Hello";
    echo var_dump($a);
    echo "<br>";

    $x = 8.365;
    var_dump($x);
    echo "<br>";

    $b = True;
    echo var_dump($b);
    echo "<br>";

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";

    // Strings in php
    $name = "John";
    echo "$name <br>";
    echo strlen($name);  //number of letters in the name
    echo "<br>";
    echo str_word_count($name);  //count the number of words in the name string
    echo "<br>";
    echo strpos($name, "hn"); //search for the letters in the name
    echo "<br>";
    echo strtoupper($name); //Uppercase
    echo "<br>";
    echo strtolower($name);//Lowercase
    echo "<br>";
    echo str_replace("ohn", "ames", $name); //Replace certain letters in the name
    echo "<br>";
    echo strrev($name);  //reverse the string name
    echo "<br>";
    $c = explode(" ", $name);  //convert string into array
    print_r($c);
    echo "<br>";
    
    // Concatenating strings
    $f = "Hello";
    $g = "World";
    $z = $f . $g;
    echo $z;
    echo "<br>";

    //slicing strings
    //Start the slice at index 6 and end the slice 5 positions later:
    $a = "Hello World!";
    echo substr($a, 6, 5);

    //Start the slice at index 6 and go all the way to the end:
    $v = "Hello World!";
    echo substr($v, 6);
    echo"<br>";

    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;

    // PHP Numbers
    $a = 5;
    $b = 5.34;
    $c = "25";
    echo"<br>";

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo"<br>";
    var_dump($b);
    echo"<br>";
    var_dump($c);
    echo"<br>";
        





    ?>
</body>
</html>
