<?php
    //variable
    $firstName = 'Shivam';
    
    //Const var
    define('last_name', 'Tayal');

    //strings
    $stringOne = 'my email is ';
    $stringTwo = 'abc@123.com';

    //get certain char out of string
    echo $stringTwo[0] . '<br/>';

    //basic fnc for string
    echo strlen($firstName). '<br/>'; // to find length of str
    echo strtoupper($firstName). '<br/>'; // and similar for lower case
    echo str_replace('m','n', $firstName). '<br/>';

    //numbers -- integer, float
    $radius = 25; //int
    $pi = 3.14; //float

    // num operator -- basic : +,-,*,/,**
    //order of operation : BIDMAS
    // ++ -- *= += -= /= **=  ---- short hand operator

    // function for num
    //floor($pi); ceil(pi); pi(); -- lot more

    //ARRAY
    // indexed arrays
    $peopleOne = ['Shivam', 'rey'];
    echo $peopleOne[1]. '<br/>'; // hence indexed
    $peopleTwo = array('luke', 'shan');
    $peopleTwo[1] = 'akira';
    $peopleTwo[] = 'ayten'; array_push($peopleTwo, 'zahra');
    print_r($peopleTwo); // to print a array in browser.
    echo '<br/>' .count($peopleTwo). '<br/>';
    $peopleThree = array_merge($peopleTwo, $peopleOne);

    //Associative array
    // key value pair -- like dictonary
    $ninjasOne = ['shivam'=>'fire', 'strider' => 'gondor'];
    echo $ninjasOne['shivam']. '<br/>';
    // rest similar to indexed array ... just replace 1 with key.

    //Multi dimentional Array
    $blogs = [
        ['hello', 'hi'],
        ['welcome', 'grettings']
    ];
    echo $blogs[1][0]. '<br/>';
    array_pop($blogs); // ..same as t..
    //simliar to single dimensional ... 

    //loops
    for($i=0; $i<count($blogs);$i++)
    {
        echo 'some template'. '<br/>';
    }
    foreach ($peopleOne as $po) { //each item in peopleOne is reffered as po
        echo $po. '<br/>'; 
    }
    $a = 0;
    while ($a < count($peopleOne)) {
        echo $peopleOne[$a] .  ' ';
        $a++;
    }
    echo '<br/>';
    //boolean (true or false) and comparison
    // == != <= >= > < === !== || &&

    //conditional loop
    //if() .. elseif() .. else ..

    //break & continue .. in loops .. ^^

    //function
    // takes a input and gives a output .. like a black box .. haha :)
    function sayHello($name = 'NoName') //NoName set by default
    {
        echo "good morning $name" . '<Br/>';
        global $firstName; // to access var at global level
        echo "good morning $firstName" . '<Br/>';
    }
    sayHello(); // invoking fncs ..
    sayHello('Zahra'); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    <div>
        <?php echo $firstName; ?>
        <?php echo last_name; ?>
        
        <!--string practice-->
        <?php echo $stringOne . $stringTwo; ?> <!---use "." for concanate-->
        <?php echo " $firstName Tayal"; ?><!--when using " we can add var inside them-->
        <?php echo "the ninja scremmed \"whaaaa\""; ?> <!--use \ for escape char-->
</body>
</html>