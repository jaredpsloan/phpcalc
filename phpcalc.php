<?php
/**
  * @author Jared Sloan
  * @author www.jaredpsloan.com
 * A simple object oriented php calculator using that receives values with the _Post method, form style  */


$result = "";

$calculator = new calculator();
if(isset($_POST['submit']))
{
    $result = $calculator->result($_POST['n1'],$_POST['n2'],$_POST['op']);
}



class calculator
{
    var $a;
    var $b;

    function execop($operator)
    {
        switch($operator)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            case 'r':
                return $this->a / $this->b;
                break;

            default:
                return "Error";
        }
    }
    function result($n1, $n2, $n3)
    {
        $this->a = $n1;
        $this->b = $n2;
        return $this->execop($n3);
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <link rel="stylesheet" href="css/style.css" />

    <style>
        body {
            background:#B1B1B1;
            color: white;
            font-size: 20px;
            font-style: arial;

        }

        table {
            border-radius: 25px;
            padding: 15px;
            background:#94D3CA;

            margin-left: auto;
            margin-right: auto;
        }

        h1 {

            text-align: center;

        }

        #calc {
            border-radius: 25px;
            padding: 15px;
            width: 550px;
            height: 300px;
            margin: 100px 200px 200px 200px;
            background: black;
           margin-left: auto;
            margin-right: auto;
            background: black; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(black, ghostwhite); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(black, ghostwhite); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(black, ghostwhite); /* For Firefox 3.6 to 15 */
            background: linear-gradient(black, ghostwhite); /* Standard syntax */
        }

    </style>

</head>

<body>
<div id="calc">
<h1>Jared's Simple Calculator 1.0</h1>
<form method="post">
    <table align="center">

        <tr>
            <td>First Number</td>
            <td><input type="number" name="n1"></td>
        </tr>


        <tr>
            <td>Operator:</td>


            <td><input type="radio" name="op" value="+">+
                <input type="radio" name="op" value="-">-
                <input type="radio" name="op" value="*">x
                <input type="radio" name="op" value="/">/<br>
            </td>
        </tr>

        <tr>
            <td>Second Number:</td>
            <td><input type="number" name="n2"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value=" Calculate Result  "></td>
        </tr>

        <tr>
            <td>Result:</td>
            <td><strong><?php echo $result; ?><strong></td>
        </tr>

    </table>
</form>
    </div>
</body>
</html>
