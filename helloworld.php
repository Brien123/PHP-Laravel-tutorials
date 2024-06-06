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

    //PHP NaN
    /*NaN stands for Not a Number.

    NaN is used for impossible mathematical operations.*/

    $x = acos(8);
    var_dump($x);
    echo"<br>";
 
    // PHP Constant
    //  create a constant in php, use the define() method as shown below.

    define('name', 'John Doe');
    echo name;
    echo '<br>';

    // using the const keyword
    const myCar = 'Benz';
    echo myCar;
    echo '<br>';

    // Arrays in php 
    // using the array() method
    $fruits = array('apple', 'banana', 'mango');
    echo $fruits[0];
    echo '<br>';

    // Associative array
    $age = array('Peter'=>35, 'John'=>30, 'James'=>31);
    echo $age['Peter'];
    echo '<br>';

    // COnstant arrays
    define ('cars', ['alfa romeo', 'benz', 'bmw']);
    echo cars;
    echo '<br>';
    
    //array methods
    //count
    echo count($cars);
    echo '<br>';

    //array indexing
    echo cars[0];
    echo '<br>';

    //channging values
    $cars[0] = 'Ford';
    var_dump($cars);
    echo '<br>';

    //looping through an array
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
      echo "$x <br>";
    };
    echo '<br>';
    
    // adding new elements quickly
    array_push($cars, 'ford');
    var_dump($cars);
    echo '<br>';

    // removing items from an array
    //using array_splice
    array_splice($cars, 1,1);
    var_dump($cars);
    echo '<br>';

    // using unset function
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[1]);
    var_dump($cars);
    echo '<br>';

    // removing the last item
    $cars = array("Volvo", "BMW", "Toyota");
    array_pop($cars);
    var_dump($cars);
    echo '<br>';

    // removing first item
    $cars = array("Volvo", "BMW", "Toyota");
    array_shift($cars);
    var_dump($cars);
    echo '<br>';

    // sorting arrays
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    var_dump($cars);
    echo '<br>';


    // Regular Expressions(Regex)
    // Using preg_match()
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str);
    echo '<br>';

    // Using preg_match_all()
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);
    echo '<br>';

    // Using preg_replace()
    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str);
    echo '<br>';

    // PHP if/else loops
    if (5>3){
        echo "hello world";
    }
    echo '<br>';

    // if else
    $x = 10;
    if ($x>11){
        echo 'hello';
    }
    else {
        echo 'world';
    }
    echo '<br>';

    // logics
    $a = 5;

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }
    echo '<br>';

    // switch statement
    $col = 'green';
    switch ($col) {
        case "red":
          echo "Your favorite color is red!";
          break;
        case "blue":
          echo "Your favorite color is blue!";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
      echo '<br>';

    // while loop
    $i = 1;
    while($i<10){
        echo $i;
        $i++;
    }
    echo '<br>';

    // break statement in while loop
    $i = 1;
    while($i<10){
        if($i==5) break;// there is also a continue statement
        echo $i;
        $i++;
    }
    echo '<br>';

    // do while loop
    $i = 1;
    do {
        echo $i;
        $i++;
    } while ($i<5);

    // for loop
    for ($x=0; $x<=10; $x++){
        echo "The number is: $x <br>"; 
    }

    // foreach loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }

    // php functions
    function hello(){
        echo "Hello world<br>";
    }
    hello();

    // sum
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }
      
    echo "5 + 10 = " . sum(5, 10) . "<br>";

    // Php oop
    // classes and objects
    // Defining a class
    class fruit {
        // properties
        public $name;
        public $color;

        //methods
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_color($color){
            $this->color = $color;
        }

        function get_color(){
            return $this->color;
        }
    }

    // Defining objects
    $apple = new fruit();
    $banana = new fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    $apple->set_color('Red');
    $banana->set_color('Yellow');

    echo $apple->get_name();
    echo '<br>';
    echo 'The color of the apple is ', $apple->get_color();
    echo '<br>';

    echo $banana->get_name();
    echo '<br>';
    echo 'The color of the banana is ', $banana->get_color();
    echo '<br>';

    
    ?>
</body>
</html>
