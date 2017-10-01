<?php
include ('db.php');
?>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Adminka</title>
		
		<!-- Bootstrap -->
		<link href="../style/bootstrap.css" rel="stylesheet">
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
		<!-- Animaition -->
		
		
		
		<!--icons for http://fontawesome.io-->
		<script src="https://use.fontawesome.com/0f37af264c.js"></script>
		
		<link href="../style/style_admin.css" rel="stylesheet">
		
		<!--icons for http://fontawesome.io-->
		<script src="https://use.fontawesome.com/0f37af264c.js"></script>
		<link rel="stylesheet" href="../style/font-awesome.min.css">
	</head>
	<body>
	<div class="up_part"> </div>
	<div class="container">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">Добавление новых новостей</a></li>     
				<li><a href="#tab2" data-toggle="tab"> Добавление фото </a></li>
				<li><a href="#tab3" data-toggle="tab"> Подписчики на прайс </a></li>



			</ul>
			<div class="container-fluid">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
		
						<form action="send_news.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputEmail1">Заголовок</label>
								<input type="text" class="form-control"  placeholder="Заголовок" name="title">

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Текст</label>
								<input type="text" class="form-control" style="height:160px" placeholder="" name="content">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Каринка</label>
								<input type="file" class=""  name="image">
							</div>
							<button  type="submit" name="btn" class="btn btn-default" value="add_news">ОТПРАВИТЬ</button>
						

						</form>
					
					</div>
					<div class="tab-pane " id="tab2">
		
						<form action="" method="post">
							<div class="form-group">
								<input type="file" name="img">
							</div>

						</form>
					
					</div>

			
					<div class="tab-pane " id="tab3">
		
						<p>37672367238</p>
					
					</div>
				</div>	
			</div>	
			
		</div>			
	</div>
	<!-- javascript for bootstrap -->
  
  <script src="../js/bootstrap.js"></script>
  </body>
  </html>
  
  