<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops and Iterators</title>
</head>
<body>
    <?php
    echo "<h1>Loops and iterators</h1>";
    echo "<hr>";

    echo "<h2>While loop:</h2>";
    $current_number=0;
    while($current_number<20){
        $current_number+=1;
        echo "Let's go fot the number $current_number"."<br>";
    };
    echo "<hr>";
      
     // Exercise
    // if (isset($_GET['number'])) {
    //     $number=$GET['number'];
    // } else {
    //     $numero=1;
    // };
    // var_dump($numero);
    // In this case, we are not getting anything, so we will use isset(), and it will show us that the condition is negative.
    // So that we can simulate that we getting datas, we can enter into URL: ?number=33
    echo "<h2>Exercise</h2>";
    $number=2;
    $counter=0;
    while($counter<=10){
        echo "<h3>$number x $counter = ".($number*$counter)."</h3>";
        $counter+=1;
    };

    echo "<hr>";
    echo "<h2>Do While</h2>";
    // In the "Do While" the condition is evaluated at the end of the code block.

    $age=18;
    $counter2=1;
    do{
        echo "<h3>Tienes acceso al local privado $counter2.</h3>";
        $counter2++;
    } while ($age>=18 && $counter2<=3);

    echo "<hr>";
    echo "<h2>For Loop</h2>";

    // for($variable;condition;incrementer/decrementer){instructions};
    for ($product=1; $product<=20 ; $product++) { 
        echo "<p>This is the product number $product.</p>" ;
        if($product==15){
            echo "This code block will executed and after will final the code";
            break;
        };
    };
    ?>
</body>
</html>