<?php

Class rsaclock
{
    function countdown($now)
    {
        $rsa = mktime(0,0,0,7,24,2020);
        $diff = $rsa - $now;

        switch ($diff) 
        {
            case "$diff > 0":
                $time["status"] = "아직 유효합니다.";
                break;
            
            case "0":
                $time["status"] = "바로 지금 입니다.";
                break;

            case "$diff < 0":
                $time["status"] = "지금은 유효하지 않습니다.";
                break;
            default:
                # code...
                break;
        }

        $time["days"] = floor($diff / 86400);
        $diff %= 86400;

        $time["hours"] = floor($diff / 3600);
        $diff %= 3600;

        $time["min"] = floor($diff / 60);
        $time["sec"] = $diff % 60;

        return $time;
    }
}

$foo = new rsaclock;
$clock = $foo -> countdown(date("U"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D_Day counter</title>
</head>
<body bgcolor="FFFFFF">
    <table width="650" border="10" cellspacing="0" cellpadding="0" align="center">
        <tr bgcolor="#00CCC">
            <div align="center">
                <p>&nbsp;</p>
                <table width="600" border="5" cellspacing="0" cellpadding="0">
                    <tr bgcolor="CCFFFF">
                        <td>
                            <div align="center">
                                <?php
                                    printf("<font color=red><h3>제 32회 도쿄올림픽 <br> 2020년 7월 24일이 %s 일, %s 시간, %s 분, %s 초 남았습니다.<br>( %s )</h3></font>\n",
                                            $clock['days'], $clock['hours'],$clock['min'],$clock['sec'],$clock['status']);
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </tr>
    </table>
</body>
</html>