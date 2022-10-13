<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TICKETS</title>
	<script type="text/javascript" src="../ext/jquery.min.js"></script>
	<script type="text/javascript" src="../ext/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../ext/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	 <div class="col-md-4 col-md-offset-4" style="padding-top:70px;">
		<form class="form-signin" method="post" id="formusesion" action="php/op_usuarioSesionValidar.php">
			<label for="usuario" class="sr-only">Usuario</label>
			<input type="text" id="usuario" name="cedula" class="form-control" placeholder="Usuario" required autofocus>
			<label for="clave" class="sr-only">Clave</label>
			<input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" required><br>
			<select id="tipo" name="tipo" class="form-control">
				<option value="1">Administrador</option>
				<option value="2">Docente</option>
				<option value="3">Estudiante</option>
				<option value="4">Acudiente</option>
			</select><br>
			<button class="btn btn-lg btn-info btn-block" type="submit">Iniciar Sesión</button>
		</form>
	</div>
	<!-- <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Sign In</div>
				</div>     
				<div style="padding-top:30px" class="panel-body" >
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                            
					<form id="loginform" class="form-horizontal" role="form" method="post" id="formusesion" action="php/op_usuarioSesionValidar.php">                                    
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
						</div>                                
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
						</div>                                                                   
						<div class="input-group">
							<div class="checkbox">
							<label>
								<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
							</label>
							</div>
						</div>
						<div style="margin-top:10px" class="form-group">
							
							<div class="col-sm-12 controls">
							<button class="btn btn-lg btn-info btn-block" type="submit">Iniciar Sesión</button>
							</div>
						</div>
					</form>     
				</div>                     
			</div>  
        </div>
    </div>  -->
</body>

</html>