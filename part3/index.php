<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link href="css/Icomoon/style.css" rel="stylesheet" type="text/css" />
<link href="css/animated-header.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="scripts/animated-header.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="header-inner">
            <div id="header-inner-logo">
                <div id="header-inner-logo-icon"><span class="iconb" data-icon="&#xe150;"></span></div>
                <div id="header-inner-logo-text"><span>PHP</span>안녕하세요</div>
            </div>
            <div id="header-inner-nav">
                <p data-button="1">Header</p>
                <p data-button="2">main</p>
                <p data-button="3">footer</p>
            </div>
        </div>
	</div>
</div>

<div class="tab" data-section="1">
    <img src=" assets/1.jpg" />
    <div class="tab-headline">
		<header>
			<?php include "header.php";?>
		</header>
	</div>
</div>
<div class="tab" data-section="2">
    <img src="assets/2.jpg" />
    <div class="tab-headline">
	<section>
	    <?php include "main.php";?>
	</section> 
	</div>
</div>
<div class="tab" data-section="3">
    <img src="assets/3.jpg" />
    <div class="tab-headline">
	<footer>
    	<?php include "footer.php";?>
    </footer>
	</div>
</div>

</body>
</html>
