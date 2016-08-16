<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title><?php include 'user/mainvar.php';echo $nombrelugar; ?> - Inicio</title>

	<!-- css -->
	<link href="assets/base.min.css" rel="stylesheet">
	<style>
		#upload,#uploadpic,#uploadau{
    display:none
}
	</style>
	
	<!-- favicon -->
	<!-- ... -->
</head>
<?php
include 'user/mainvar.php';
echo '<body class="page-brand">
	<header class="header header-transparent header-waterfall ui-header">
		<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#ui_menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo margin-left-no" href="index.html">Enviar mensaje</a>
	</header>
	<nav aria-hidden="true" class="menu" id="ui_menu" tabindex="-1">
		<div class="menu-scroll">
			<div class="menu-content">
				<a class="menu-logo" href="index.html">'.$nombrelugar.'</a>
				<ul class="nav">
					<li>
<a class="waves-attach" href="#">Enviar Mensaje</a>
					</li>
					<li>
<a class="waves-attach" href="#">Ajustes</a>
					</li>
					<li>
<a class="waves-attach" href="#">Ayuda</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
						<h1 class="content-heading">'.$nombrelugar.' - Inicio</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
					<section class="content-inner margin-top-no">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<p>Bienvenido a este servicio de enviar mensaje. Facilita el tema de enviar una actualizacion acerca de alguna cosa... como un pedido, mandar una imagen, etcétera. Puede escribirlo justo ahi abajo, o cliquee en las pestañas para enviar un tipo especifico de contenido</p>
							<div class="card-main">
								<nav class="tab-nav tab-nav-brand margin-top-no">
									<ul class="nav nav-justified">
										<li class="active">
											<a class="waves-attach" data-toggle="tab" href="#ui_tab_texto">Texto</a>
										</li>
										<li>
											<a class="waves-attach" data-toggle="tab" href="#ui_tab_imagen">Imagen</a>
										</li>
										<li>
											<a class="waves-attach" data-toggle="tab" href="#ui_tab_audio">Audio</a>
										</li>
										<li>
											<a class="waves-attach" data-toggle="tab" href="#ui_tab_archivo">Archivo</a>
										</li>
									</ul>
								</nav>
								<div class="card-inner">
									<div class="tab-content">
										<div class="tab-pane fade active in" id="ui_tab_texto">
											<div class="form-group form-group-label">
											<form action="telegram/enviar.php" method="post" id="formensaje" accept-charset="utf-8">
    											<label class="floating-label" for="mensaje"> Ingrese el mensaje </label>
    											<textarea class="form-control textarea-autosize" id="mensaje" name="mensaje" rows="1"></textarea>
											</form>
											<br>
											  <a href="javascript:;" onclick="document.getElementById(\'formensaje\').submit();" class="btn btn-brand waves-attach waves-light">Enviar</a>
											</div>
										</div>
										<div class="tab-pane fade" id="ui_tab_imagen">
										<form enctype="multipart/form-data" action="assets/subirimg.php" id="imgenviar" method="POST">
											<input id="uploadpic" name="fileToUpload" id="fileToUpload" type="file" accept="image/*"/>
											<a class="btn btn-flat btn-brand waves-attach" type="submit" name="submit" id="upload_pic"> Subir imagen </a>
										</form>
											<br><br>
											<a href="javascript:;" onclick="document.getElementById(\'imgenviar\').submit();" class="btn btn-brand waves-attach waves-light"> Enviar </a>
										</div>
										<div class="tab-pane fade" id="ui_tab_audio">
										<form enctype="multipart/form-data" action="assets/subirau.php" id="auenviar" method="POST" enctype="multipart/form-data">
											<input id="uploadau" name="photo" id="fileToUpload" type="file" accept="audio/*"/>
											<a class="btn btn-brand waves-attach waves-light" type="submit" name="submit" id="upload_au> Subir Audio </a>
										</form>
											<br><br>
											<a href="javascript:;" onclick="document.getElementById(\'auenviar\').submit();" class="btn btn-brand waves-attach waves-light"> Enviar </a>
										</div>
										<div class="tab-pane fade" id="ui_tab_archivo">
										<form enctype="multipart/form-data" action="assets/subirarchivos.php" id="arcenviar" method="POST">
											<input id="upload" name="fileToUpload" id="fileToUpload" type="file"/>
											<a class="btn btn-brand waves-attach waves-light"> Subir Archivo </a>
										</form>
											<br><br>
											<a href="javascript:;" onclick="document.getElementById(\'arcenviar\').submit();" class="btn btn-brand waves-attach waves-light"> Enviar </a>
										</div>
									</div>
								</div>
							</div>
									

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</main>


	<footer class="ui-footer">
		<div class="container">
			<p>Hecho con Material by Daemonite</p>
		</div>
	</footer>
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="assets/base.min.js"></script>
	<script src="net.js"></script>
</body>';
?>
</html>
