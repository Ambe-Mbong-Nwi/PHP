<?php 
//variable definitions below.
//you dont have to declare variables before using. they exist as soon as you assign it a value.
    $color = 'blue';
    $name = 'ambe';
    $age = 34;
    $price = 100;
    $gallons = 5;
    $total = $price * $gallons;
    $attendace += 1; //adds one to the variable 

    //math operations or funcs
    $absolute = abs($price);
    echo "absolute value of a number: $absolute";

    $pivalue = pi();
    echo "pi value: $pivalue";

    $round = round($price);
    echo "round value of a number: $round";

    $sqrt = sqrt($price);
    echo "square root value of a number: $sqrt";

    //NB: SINGLE QUOTES WITH ECHO RETURN EXACT STRING WITHOUT EXECUTING THE VARIABLES
    //see string funcs too

    //check string funcs too in doc php.net
    //string substr )string $string, int $start[int $length])
    $newstring = substr($name, 1, 2);
    echo "formated string: $newstring ";

    //see more on date formating
    //calculate years of age (input string: YYY-MM-DD)
    function age($age) {        //defines a func age and takes a single parameter
        list($year, $month, $day) = explode("-", $age);   //split the different params from the age string seperated be - eg 4040-40-40 and assign to the vars year month and day
        $year_diff = date("Y") - $year;   //diff btwn current yeat and year extracted
        $month_diff = date("m") - $month;
        $day_diff = date("d") - $day;
        if ($day_diff < 0 || $month_diff < 0)  //id day or month diff is negative, means bd has not occured yet this year 
            $year_diff--;   //so the year subtracts 1
        return $year_diff;   //finally returning years(age)
    }


    //global vars can be accessed everywhere
   
    //session variables? can be accessed on every page that makes up the web app.
?>