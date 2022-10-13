$(document).ready(function (e) {
	cargarfecha('#Est_FechaNacimiento');
	
	//inscripcion aspirantes
	$("#registroNuevo").click(function (e) {

		d_Est_TipoIdentificacion = $("#Est_TipoIdentificacion").val();
        d_Est_Identificacion = $("#Est_Identificacion").val();
        d_Est_Nombres = $("#Est_Nombres").val();
        d_Est_Apellidos = $("#Est_Apellidos").val();
        d_Est_Direccion = $("#Est_Direccion").val();
        d_Est_Telefono = $("#Est_Telefono").val();
        d_Est_Correo = $("#Est_Correo").val();
        d_Est_Genero = $("#Est_Genero").val();
        d_Est_FechaNacimiento = $("#Est_FechaNacimiento").val();
        d_Est_Estrato = $("#Est_Estrato").val();
        d_Est_RH = $("#Est_RH").val();
        d_Est_Estado = $("#Est_Estado").val();
        d_Est_EPS = $("#Est_EPS").val();
        d_Ciu_codigo = $("#Ciu_codigo").val();
        d_Est_Clave = $("#Est_Clave").val();
        d_Est_GradoCursado = $("#Est_GradoCursado").val();
        d_Est_InstitucionProcedencia = $("#Est_InstitucionProcedencia").val();
        d_Est_AnoSolicitud = $("#Est_AnoSolicitud").val();
        d_Est_GradoSolicitud = $("#Est_GradoSolicitud").val();
        d_Est_Tipo = $("#Est_Tipo").val();
				$.ajax({
					type: "POST",
					url: "user/php/op_estudianteCrear.php",
					beforeSend: function () {
						$("#registroNuevo").hide();
					},
					complete: function () {
						$("#registroNuevo").show();
					},
					dataType: 'json',
					data: {
						Est_TipoIdentificacion: d_Est_TipoIdentificacion,
						Est_Identificacion: d_Est_Identificacion,
						Est_Nombres: d_Est_Nombres,
						Est_Apellidos: d_Est_Apellidos,
						Est_Direccion: d_Est_Direccion,
						Est_Telefono: d_Est_Telefono,
						Est_Correo: d_Est_Correo,
						Est_Genero: d_Est_Genero,
						Est_FechaNacimiento: d_Est_FechaNacimiento,
						Est_Estrato: d_Est_Estrato,
						Est_RH: d_Est_RH,
						Est_Estado: d_Est_Estado,
						Est_EPS: d_Est_EPS,
						Ciu_codigo: d_Ciu_codigo,
						Est_Clave: d_Est_Clave,
						Est_GradoCursado: d_Est_GradoCursado,
						Est_InstitucionProcedencia: d_Est_InstitucionProcedencia,
						Est_AnoSolicitud: d_Est_AnoSolicitud,
						Est_GradoSolicitud: d_Est_GradoSolicitud,
						Est_Tipo: d_Est_Tipo,

					},
					success: function (rs) {
						if (rs.mensaje == "OK") {
							$("#d_mensajeModalusuarioCrearNuevo").html('<div class="alert alert-success" role="alert">Solicitud enviada exitosamente. </div>');
							$('#registroNuevo').remove();
						} else {
							$("#d_mensajeModalusuarioCrearNuevo").html('<div class="alert alert-danger" role="alert"> No se ha registrado correctamente, Los datos de identificación,nombre, apellido,grado cursado, institución de procedencia, el año para el cual solicita el cupo y el grado deben de estar diligenciados.  </div>');
						}
					},
					error: function (er1, er2, er3) {
						console.log(er1);
						console.log(er2);
						console.log(er3);
					}
				});

	});
	});