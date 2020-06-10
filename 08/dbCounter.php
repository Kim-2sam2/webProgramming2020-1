<?php

use PhpMyAdmin\Console;

$connect = mysqli_connect("localhost", "phpweb", "1234");
mysqli_select_db($connect, "webp");

$result=mysqli_query($connect, "select * from counter");

function mysqli_result($res, $row=0)
{
    $data = mysqli_fetch_row($res);
    return $data[$row];
}

$number = mysqli_result($result, 0, "number");

$number2 = $number;

settype($number, "string");

$i = 0;
$j = strlen($number);

echo "
<!DOCTYPE html>
<head>
    <title>Conter1</title>
</head>
<body bgcolor=\"#FFFFFF\">
<table width=\"600\" border=\"10\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
    <tr bgcolor=\"CCCCCC\">
        <td>
            <div align=\"center\">
                <p>&nbsp;</p>
                <table width=\"450\" border=\"10\" cellspacing=\"0\" cellpading=\"0\">
                    <tr bgcolor=white>
                        <td>
                            <div align=\"center\">
                                <p><b><font color=\"black\" size=\"6\">당신은 </font></b></p>
                                <p>
                                ";

                                while( $i < $j )
                                {
                                    switch($number[$i])
                                    {
                                        case "0" : echo "<img src=\"./image/0.gif\">";
                                                    $i++;
                                                    break;
                                        case "1" : echo "<img src=\"./image/1.gif\">";
                                                    $i++;
                                                    break;
                                        case "2" : echo "<img src=\"./image/2.gif\">";
                                                    $i++;
                                                    break;
                                        case "3" : echo "<img src=\"./image/3.gif\">";
                                                    $i++;
                                                    break;
                                        case "4" : echo "<img src=\"./image/4.gif\">";
                                                    $i++;
                                                    break;
                                        case "5" : echo "<img src=\"./image/5.gif\">";
                                                    $i++;
                                                    break;
                                        case "6" : echo "<img src=\"./image/6.gif\">";
                                                    $i++;
                                                    break;
                                        case "7" : echo "<img src=\"./image/7.gif\">";
                                                    $i++;
                                                    break;
                                        case "8" : echo "<img src=\"./image/8.gif\">";
                                                    $i++;
                                                    break;
                                        case "9" : echo "<img src=\"./image/9.gif\">";
                                                    $i++;
                                                    break;
                                    }
                                }
                                echo "
                                <font size \"6\" color=\"black\"> 째</font></p>
                                <p><font size=\"6\" color=\"black\">손님입니다.</font></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
";

echo ($number);

mysqli_query($connect, "update counter set number=$number2+1 where number=$number2");
?>
