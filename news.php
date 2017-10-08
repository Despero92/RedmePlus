<?php 
include ('admin-part/db.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NEWS</title>
	
    <!-- Bootstrap -->
    <link href="style/bootstrap.css" rel="stylesheet">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<!-- Animaition -->
	<link href="style/animate.css" rel="stylesheet">
	
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>
	
	<!--icons for http://fontawesome.io-->
	<script src="https://use.fontawesome.com/0f37af264c.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	
	<link href="style/style.css" rel="stylesheet">
	<script  type="text/javascript" src="js/gallery.js"></script>
	<script  type="text/javascript" src="js/my_js.js"></script>
	<script  type="text/javascript" src="js/slidown_menu.js"></script>
	
	<script type="text/javascript" src="js/count_numbers.js"></script>
	<!--<script  type="text/javascript" src="js/gallery.js"></script>-->
	
	<!--icons for http://fontawesome.io-->
	<script src="https://use.fontawesome.com/0f37af264c.js"></script>
	<link rel="stylesheet" href="style/font-awesome.min.css">
	
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:white;">
	<div class="wraper">
		<div class="conteiner-fluid">
			<div class="mn">
				<div id="trigger" class="sandwich"> 
					<div class="sw-topper"></div>
					<div class="sw-bottom"></div>
					<div class="sw-footer"></div>
				</div>
				<div class="mn_home">
					<a href="/">RedmiPlus</a>
				</div>
				<!-------- slidown_menu ---------->
				<div id="slider" class="overlay overlay-slidedown">
							
					<nav>
						<ul>
							<li><a href="http://localhost/work/news.php">Статьи</a></li><i class="fa fa-circle" aria-hidden="true"></i>
							<li><a href="#">О нас</a></li><i class="fa fa-circle" aria-hidden="true"></i>
							<li><a href="#">Фотоотчеты</a></li><i class="fa fa-circle" aria-hidden="true"></i>
							<li><a href="#">Оплата</a></li><i class="fa fa-circle" aria-hidden="true"></i>
							<li><a href="#">Доставка</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="conteiner nesw_cntnr">
			<div class="row">
				<div class="col-lg-3 col-md-3">
				
				
				</div>
				<div class="col-lg-8 col-md-8">
				<?php foreach($news as $news_post){?>
				<div class="media">
						  <a class="pull-left">
					<img class="media-object" src="<?=$news_post['image'];?>" height="200">
					</a>
						  <div class="media-body">
							<h3 class="media-heading"><?=$news_post['title'];?></h3>
							<?=$news_post['content'];?>
						  </div>
						</div>
					<hr>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	<?php 
    $string = "Всем привет из Манчестера !"; 
    $exp_string = explode(' ', $string);
        foreach($exp_string as $value){
            if (mb_strlen($value)>7){
                $a = mb_substr($value, 0 , 6);
                $value = $a.'&#42;';
                
            }
            $array[]=$value;
        }
        $string = implode(' ', $array);
        echo $string;?>
  
  <!-- javascript for bootstrap -->
  <script src="js/bootstrap.js"></script>
  </body>
  </html>

  <?php
  $a = 1;
  $b = 2;
  $a = $a ^ $b;
  $b = $b ^ $a;
  $a = $b ^ $a;
  echo "<br>".$b."<br>";
  echo $a."<br>"

  ?>