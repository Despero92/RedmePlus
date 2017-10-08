<?php
include ('db.php');
include('send_news.php');
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
		
		<!-- Animaition -->
		
		
		
		<!--icons for http://fontawesome.io-->
		<script src="https://use.fontawesome.com/0f37af264c.js"></script>
		
		<link href="../style/style_admin.css" rel="stylesheet">
		
		<!--icons for http://fontawesome.io-->
		<script src="https://use.fontawesome.com/0f37af264c.js"></script>
		<link rel="stylesheet" href="../style/font-awesome.min.css">
	</head>
	<body>
	<div class="up_part">
		<span>Прайс скачали <?=$count ?> раз(а)</span>

		<div class='btn_group'>
			<a href="/work" class="btn btn-success">Вернуться на сайт</a>
			<button class="btn btn-primary " data-toggle="modal" data-target="#myModal">Загрузить прайс</button>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Загрузка прайса</h4>
		      </div>
		      <div class="modal-body">
		      	<form action="send_news.php" method="post" enctype="multipart/form-data">
		      		<input type="file" name="price">
		      	</div>
		   		      		<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				        <button type="submit" class="btn btn-primary">Загрузить прайс </button>
				    </div>

		      	</form>
		        
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="container">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">Добавление новых новостей</a></li>     
				<li><a href="#tab2" data-toggle="tab"> Добавление фото </a></li>
				<li><a href="#tab3" data-toggle="tab"> Подписчики на прайс </a></li>



			</ul>
			<div class="container-fluid">
				<div class="tab-content">
					<div class="tab-pane " id="tab1">
		
						<form action="send_news.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputEmail1">Заголовок</label>
								<input type="text" class="form-control"  placeholder="Заголовок" name="title">

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Текст</label>
								<textarea type="text" class="form-control content_news" style="height:160px" placeholder="" name="content"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Каринка</label>
								<input type="file" class=""  name="image">
							</div>
							<button  type="submit" name="btn" class="btn btn-default" value="add_news">ОТПРАВИТЬ</button>
						

						</form>
					
					</div>
					<div class="tab-pane " id="tab2">		
						
						<form action="send_news.php" method="post" enctype="multipart/form-data">
							
							<div class="form-group">
								<label for="exampleInputPassword1">Добавление картинок в фотоальбом</label>
								<input type="file" class=""  name="image">
							</div>

							<button  type="submit" name="btn" class="btn btn-default" value="add_news">ОТПРАВИТЬ</button>

						</form>

					</div>

			
					<div class="tab-pane active" id="tab3">
						
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-md-8">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Email</th>

												<th>Дата добавления</th>
											</tr>
										</thead>
										<tbody>
											
												<?php
												$subscribe_email = mysqli_query($connection, "SELECT * FROM dispatch ORDER BY date DESC");
												
												$subscribe = array();								
													while($subscribes = mysqli_fetch_assoc($subscribe_email))
													{
													    $subscribe[] = $subscribes;

													}

													//var_dump($subscribe);

												foreach ($subscribe as  $subs) {?>
												<tr>
													<td><?=$subs['email'];?></td>
													<td><?=$subs['date'];?></td>
												</tr>


												<?php }?>
											
										</tbody>	
			  
									</table>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="btn_dispath">
										<a href="send_news.php?dispath=all" class="btn btn-primary btn-lg btn-block"> Скачать подписчиков </a>
									</div>
									


								</div>
							</div>
						</div>
					
					</div>
				</div>	
			</div>	
			
		</div>			
	</div>
	<!-- javascript for bootstrap -->
	
  
  <script src="../js/bootstrap.js"></script>
  </body>
  </html>
  
  