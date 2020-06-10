<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>20160705</title>
</head>
<body>
<?php
$gugu_array = [2 => [],3 => [], 4 => [], 5 => [], 
                    6 => [], 7 => [], 8 => [], 9 => []];

function input_list($num_list, $num)
{
    for ($i=1; $i < 10; $i++) { 
        $num_list[$i] = $num * $i;
    }
    return $num_list;
}

function print_list($list)
{
    foreach ($list as $value) {
        echo "$value ";
    }

}

foreach ($gugu_array as $key => $value) 
{
    $value = input_list($value, $key);
    $gugu_array[$key] = $value;
}

foreach ($gugu_array as $value) {
    print_list($value);
    echo "<br>";
}
?>    
</body>
</html>
