<?php
/**
 * Created by PhpStorm.
 * User: Protoss
 * Date: 28.05.2018
 * Time: 15:08
 */

class Fizz
{
    public function __construct()
    {
        //echo isSubmitted();
    }

    private $value = 0;

    public function isSubmitted()
    {
        if (isset($_GET['submit'])) {
            return $this->value = $_GET['numberfield'];;
        } else {
            echo "no value";
        }

    }

    public function doFuzzBuzz()
    {
        if ($this->value % 3 == 0 && value % 5 == 0 && value % 7 == 0) {
            if ($this->value % 3 == 0) {
                echo "durch 3";
            } else {
                if ($this->value % 5 == 0) {
                    echo "durch 5";

                } else {
                    if ($this->value % 7 == 0) {
                        echo "durch 7";
                    }
                }
            }
        }

    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buzz</title>
</head>
<body>
<?php

/**
Execution Main part of this programm
 */



$test = new Fizz();
echo $test->isSubmitted();
$test->doFuzzBuzz();

$n = new Itera(20, 0);
$y = new Divisor("dfsdfs", 5);
$x = new Divisor("ozuzpou", 7);
$m = new Divisor("kfngdgknd", 3);
$o = new Divisor("uwerer", 9);
?>

</body>
</html>