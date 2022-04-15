<?php 
    // //Exercise 1

    echo('hello world' . "\n") ;
    $name = 'Kamila';
    $surname = 'Temirxojoeva';
    $year = 1999;
    $month = 10;
    $day = 6;
    $height = 168;
    $classmates = ["Tanya", "Luda", "Vova"];

    define("INCH_IN_CM", 2.54);

    echo ($name . " " . $surname);

    var_dump($classmates);


    // //Exercise 2

    echo "My height in INCH is " . $height / INCH_IN_CM . "\n";

     $current_year = (int) date("Y");

     $current_month =(int) date("n");

     $current_day = (int) date('j');
    

    //  //Exercise 3

    if ($month > $current_month){
        echo "I'm " . $current_year - $year - 1 . " years old"; 
        echo "In this year I will be " . $current_year - $year . " years old " ;  
    }
    elseif ($month == $current_month){
        echo "month in present";
        if ($day > $current_day){
            echo "day in future";
        }
        elseif ($day == $current_day){
            echo "I just turned " . $current_year - $year . "today" ;   
        }
        else {
            echo "day is passed";
        }
    }
    else {
        echo "I have had birthday on" . $month ;
    }

    //Exercise 4 

    $classmates = array(
        ['name' => "Tanya", 'surname' => "Gluxova", 'gender' => "female"],
        ['name' =>"Luda", 'surname' => "Zorina", 'gender' => "female"],
        ['name' => "Vova", 'surname' => "An", 'gender' => "male"]
    );

    foreach($classmates as $index => $classmate){
        foreach($classmate as $key => $value){
            if ($key == "name"){
                echo $value . "\n";
            }
        }
        $classmate['full_name'] = $classmate['name'] . " " . $classmate['surname'];
        switch($classmate['gender']) {
            case "male":
                echo "He is  " . $classmate['full_name'] . "\n";
                break;
            case "female":
                echo "She is  " . $classmate['full_name'] . "\n";
                break;  
            default:
                echo "Gender is not male or female" ;   
        }
    
        unset($classmate['name']);
        unset($classmate['surname']);
        $classmates[$index] = $classmate;

    }
    
    //Exercise 5

    $reversed_name = '';
    for ($i = strlen($name) - 1; $i >= 0; $i--) {
        $reversed_name .= $name[$i];
    }
    echo $reversed_name;



    

    


