<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dir</title>
</head>
<body>
<?php
    print("<UL>\n"); #현재 디랙토리를 비순차 리스트 형식<UL>로 출력
    $myDir = dir(".");

    while($entryName = $myDir -> read())
    {
        print("<LI>$entryName \n");
    }

    $myDir -> close();

    print("</UL>\n");
    
?>
</body>
</html>