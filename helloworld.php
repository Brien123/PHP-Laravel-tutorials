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
      echo "<br>"   // Each time the function is called, that variable will still have the information it contained from the last time the function was called.      


    ?>
</body>
</html>
