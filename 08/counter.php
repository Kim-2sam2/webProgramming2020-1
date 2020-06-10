<?php
$counter_file = "counter.txt";
if (file_exists($counter_file)) {
    $fp = fopen($counter_file, 'r');
    $buffer = fread ($fp, filesize($counter_file));
    fclose($fp);
    $count = intval($buffer);
} else {
    $count = 0;
}

$count +=1;

$fp = fopen($counter_file, 'w');
fwrite($fp, $count);
fclose($fp);

settype($count, "string");
$i=0;
$j=strlen($count);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter</title>
</head>
<body bgcolor="#FFFFFF">
    <td>
        <div align="center">
            <p>&nbsp;</p>
            <table width="450" border="10" cellspacing="0" cellpadding="0">
                <tr bgcolor=white>
                    <td>
                        <div align="center">
                            <p><b><font color="black" size="6">당신은</font></b></p>
                            <p>
                                <?php
                                while($i < $j){
                                    switch($count[$i])
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
                                ?>
                            <font size="6" color="black">째</font></p>
                            <p><font size="6" color"black">손님입니다.</font></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </td>
</body>
</html>