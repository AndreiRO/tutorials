<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">    
        <title>Simpletutorial For PHP</title>
    </head>
    <?php 
        //commment
        /* comment */
        # comment

 
        function separator() {
            echo "<br>\n<hr>";
        }

        echo "Hello world!";
        separator();
        /**
        * available datatypes: boolean, array, integer, float, string, object, resource, NULL
        */
        $a = 1;
        echo $a;
        separator();

        echo "Interpolating $a";
        separator();

        echo "Some other interpolation {$a}";
        separator();

        $b = 2;
        echo $a + $b;    
        separator();

        # pointer like
        $c = 'a';
        echo "The value of a: {${$c}}";
        separator();

        if($a == 1) {
            echo "1 is 1";
            separator();
        }

        $a = 2;
        if($a == 1) {
            echo "1==2?!";
            separator();
        } elseif($a == 3) {
            echo "1==3?!";
            separator();
        } else {
            echo "1 is {$a}";
            separator();
        }

        $temp = 100;
        switch($temp) {
            case 1:
                echo "1";
                break;
            case 50:
                echo "50";
                break;
            case 100:
                echo "100";
                break;
            default:
                echo "Default";
                break;
        }
        separator();

        for($i = 0; $i < 10; ++ $i) {
            echo "Times: $i\n<br>";
        }
        separator();

        while($i-- > 0) {
            echo "Second try times $i\n<br>";
        }
        separator();

        do {
            echo "Nice try";
            separator();
        } while (FALSE);
        separator();

        #strings
        echo "chr(90)", chr(90);
        separator();

        echo trim(" No worries. ");
        separator();

        echo substr("No worries.", 3, 7);
        separator();

        echo strpos("No worries", "worries");
        separator();

        echo ucfirst("no worries");
        separator();

        echo strlen("No worries.");
        separator();

        echo substr_replace("No worries.", "problems", 3, 8);
        separator();

        echo chr(65), chr(66), chr(67);
        separator();

        echo strtoupper("No worries");
        separator();

        echo (string)1.2;
        separator();
        echo strval(1.2);
        separator();

        $list = array();
        $list[] = "First value";
        $list[] = "Second value";
        $list['third'] = "Third value";
        $list[] = "Fourth value";
        foreach($list as $key => $value) {
            echo "$key => $value\n<br>";
        }
        separator();         
        
        echo count($list);
        separator();

        echo array_key_exists("third", $list);
        separator();

        print_r($list);
        asort($list);
        print_r($list);
        separator();

        array_pop($list);
        print_r($list);
        separator();

        shuffle($list);
        print_r($list);
        separator();     

        list($first, $second) = $list;
        echo $first, $second;
        separator();

        $list = array(1,2,3,4);
        echo "Current", current($list);
        echo "Next\n<br>", next($list);
        echo "Previous\n<br>", prev($list);
        echo "End\n<br>", end($list);
        reset($list);
        echo "Current", current($list);
        separator();

        echo "Implode, ", implode(";", $list);
        echo "Explode", explode(",", "Primul,Al doilea,Al treilea");
        separator();

        echo "Sub", array_slice($list, 1,2);
        separator();

        $a = array(1,2);
        $b = array(3,4);
        print_r(array_merge($a, $b));
        separator();

        // use array_diff_asoc for associative arrays
        $difference = array_diff($a, $b);
        foreach($difference as $key => $value) {
            echo "key: ", $key, " value: ", $value;
        }

        $duplicates = array(1, 2, 1, 3, 4, 5, 5, 4);
        print_r($duplicates);
        echo "No duplicates: ", array_unique($duplicates);
        separator();

        $a = array(1, 2, 3);
        print_r($a);
        print_r(array_flip($a));
        separator();

        $matrix = array();
        $matrix[0][] = 1;
        $matrix[0][] = 2;
        $matrix[0][] = 3;
        $matrix[1][] = 4;
        $matrix[1][] = 5; 
        $matrix[1][] = 6;
        print_r($matrix);
        foreach($matrix as $outerKey => $singleArray) {
            foreach($singleArray as $key => $value) {
                echo"Key: ", $key, " value: ", $value;
            }
            echo "\n<br>";
        }
        separator();

        $a = array(1,2,3);
        $b = array(1,3,2);
        $c = array(1,2,3);
        $d = array(3=>4, 4=>5, 5=>6);
        print_r(($a+$d));
        echo $a == $b;
        echo $a === $b;
        echo $a === $c;
        echo $a != $d;
        echo $a !== $b;
        echo $a <> $d;
        separator(); 

        $x = 1;
        $y = 2;
        
        function badSwap($x, $y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
        }

        function goodSwap(&$x, &$y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
        }

        badSwap($x, $y);
        echo "Bad swap: x: ", $x, " y: ", $y;
        goodSwap($x, $y);
        echo "Good swap x: ", $x, " y: ", $y;
        separator();

        function sum() {
            $s = 0;
            $args = func_get_args();
            for($i = 0; $i < count($args); ++ $i) {
                $s += $args[$i];
            }

            return $s;
        }

        echo sum(1,2,3), "\n<br>";
        echo sum(), "\n<br>";
    ?>



</html>
