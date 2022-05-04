<?php
    
    function stringMerge($string1, $string2, $letter) {
        
        $str_1 = strpos($string1, $letter);
        $word = substr($string1, 0, $str_1 + 1);

        $str_2 = strpos($string2, $letter);
        $word_1 = substr($string2, $str_2 + 1);
            
        echo $word . $word_1;
    }

    stringMerge("person","here", "e");
    stringMerge("apowiejfoiajsf","iwahfeijouh", "j");
    // pere 

    // $a = "islomom";
    // echo strpos($a, "m") . "\n";
    // 4

    // echo substr($a, -3);
    // echo strpos($a, "s");


