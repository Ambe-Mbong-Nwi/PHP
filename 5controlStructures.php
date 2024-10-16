<?php 
    $a = 10;
    $b = 40;

    //if statement
    if($a < $b)
        echo"$a is less than $b ";

    if($a > $b) {
        echo"$a is greater than $b";
     } else {
        echo "$b is greater than $a";
     }

     //switch statements
     switch ($make) {
        case "Ford":
            echo "Your car is a Ford";
            break;
        case "Toyota":
            echo "Your car is a Toyota";
            break;
     }


     //while loop
     $i = 1;
     while ($i <= 10):
        echo $i;
        $i++;
     endwhile;


     //for loop
     for ($i = 0; $i <= 10; $i++) {
        echo $i.'<br>';
     }

     //. Expression1 assigns $i the value of 1. This happens no matter
// what. Expression2 tests to see if $i is less than 10. Since 1 is less than 10, PHP executes
// the statements that follow. If $i was not less than 10, none of the statements would have
// executed
?>