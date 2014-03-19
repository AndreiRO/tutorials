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

        
    ?>

</html>
