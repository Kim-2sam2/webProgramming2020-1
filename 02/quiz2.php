<?php
    $name = '김현우';
	$phone_number = '010-1234-5678';
	$address = '대전광역시';
    $email = 'khwoo8026@naver.com';
    
    echo "<table border=1>";
    echo "<tr>
                <td>이름</td>
                <td>휴대폰 번호</td>
                <td>주소</td>
                <td>이메일</td>
            </tr>";
    echo "<tr>
                <td>$name</td>
                <td>$phone_number</td>
                <td>$address</td>
                <td>$email</td>
            </tr>";
    echo "</table>";
?>