<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="fm_index.php"><i class="glyphicon glyphicon-th-large"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="defaultNavbar">
				<p class="navbar-text">Modulo Administrativo </p>
            <ul class="nav navbar-nav navbar-right">                		
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>	
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="fm_acudiente.php">Acudiente</a></li>            
                        <li><a href="fm_administrativo.php">Administrativo</a></li>
                        <li><a href="fm_docente.php">Docente</a></li>
                        <li><a href="fm_estudiante.php">Estudiante</a></li>
                        <li><a href="fm_estudiante_acudiente.php">Estudiante acudiente</a></li>
                    </ul>
                </li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="fm_grupo.php">Grupo</a></li>
                        <li><a href="fm_horario.php">Horario</a></li>
						<li><a href="fm_materia.php">Materia</a></li>
                        <li><a href="fm_matricula.php">Matricula</a></li>
                        <li><a href="fm_nota.php">Nota</a></li>
						<li><a href="fm_asignatura.php">Asignatura</a></li>
                        <li><a href="fm_aula.php">Aula</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Otros<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">                  
                        <li><a href="fm_noticia.php">Noticia</a></li>
                        <li><a href="fm_slider.php">Slider</a></li>						
                        <li><a href="fm_cronograma.php">Cronograma</a></li>						
                        <li><a href="fm_ciudad.php">Ciudad</a></li>
                        <li><a href="fm_departamento.php">Departamento</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mis Datos<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="fm_administrativoActualizarPerfil.php">Actualizar Mis datos</a></li>
                        <li><a href="fm_administrativoCambiarClave.php">Cambiar Clave</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="op_usuarioSesionCerrar.php">Cerrar Sesión</a></li>
					</ul>
				</li>
            </ul>
        </div>
    </div>
</nav>
