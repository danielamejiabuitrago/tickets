$(document).ready(function(e) {
	/*
	data-dec:
	num->Cantidad de decimales
	No existe o letras -> No admite decimales
	
	data-sig:
	0->No admite negativos
	1->Admite negativos
	No existe o valor diferente -> No admite negativos
	*/
	$("body").on("keydown", ".vali_num", function(e) {
		letra = e.key || e.char;
		redondeo = validar_data($(this).attr("data-dec"));
		signo = validar_data($(this).attr("data-sig"));
		
		if(/^[\-]/.test(letra)){
			if(signo == 0){
				e.preventDefault();
			}
		}else{
			if(redondeo == 0){
				if (!/^[0-9]/.test(letra) && letra!='Backspace' && letra!='Delete' && letra!='ArrowLeft' && letra!='ArrowRight' && letra!='Left' && letra!='Right' && letra!='Del' && letra!='Tab') {
					e.preventDefault();
				}
			}else{
				if (!/^[0-9.]/.test(letra) && letra!='Backspace' && letra!='Delete' && letra!='ArrowLeft' && letra!='ArrowRight' && letra!='Left' && letra!='Right' && letra!='Del' && letra!='Tab') {
					e.preventDefault();
				}
			}
		}
    });
	$("body").on("keyup", ".vali_num", function(e) {
		texto = $(this).val();
		if(!/^[0-9]+([.][0-9]+)?$/.test(texto)){
			final = "";
			caract = texto.split("");
			i=0;
			primero = true;
			while(i<caract.length){
				if(caract[i] == '.'){
					if(primero){
						primero = false;
						final += caract[i];
					}else{
						i = caract.length;
					}
				}else{
					if(i==0 || (i!=0 && caract[i]!="-")){
						final += caract[i];
					}
				}
				i++;
			}
			$(this).val(final);
		}
    });
	$("body").on("change", ".vali_num", function(e) {
		texto = $(this).val();
		if(texto.length > 0){
			if(texto == "." || texto == "-" || texto == "-."){
				$(this).val("");
			}else{
				redondeo = validar_data($(this).attr("data-dec"));
				valorred = Math.pow(10, parseInt(redondeo));
				$(this).val(number_format(Math.round(parseFloat(texto)*valorred)/valorred, redondeo, '.', ''));
			}
		}
    });
});

function bloquearFormulario(formulario){
	$("#"+formulario+" input, "+"#"+formulario+" select, "+"#"+formulario+" textarea").prop("readonly", true);
}
function desbloquearFormulario(formulario){
	$("#"+formulario+" input, "+"#"+formulario+" select, "+"#"+formulario+" textarea").prop("readonly", false);	
}
function limpiarFormulario(formulario){
	$("#"+formulario+" input, "+"#"+formulario+" textarea").val("");
	$("#"+formulario+" select option:first-child").prop("selected", true);
}

/*
id: Id del input (debe llevar el #)

data-t:
1->Fecha
2->Fecha y hora
3->Hora
No existe -> Sin límite

data-h:
1->Fecha máxima hoy
2->Fecha mínima hoy
No existe -> Sin límite

data-min:
fecha minima
*/
function cargarfecha(id){
	d_tipo = validar_data($(id).attr("data-t"));
	switch(d_tipo){
		case "2":
			$(id).datetimepicker({
				format: "h:mm a"
			});
			break;
		case "3":
			$(id).datetimepicker({
				format: "YYYY-MM-DD h:mm a",
				sideBySide: true
			});
			break;
		default:
			$(id).datetimepicker({
				format: "YYYY-MM-DD"
			});
			break;
	}
	d_hoy = validar_data($(id).attr("data-h"));
	switch(d_hoy){
		case "1":
			$(id).data("DateTimePicker").maxDate(moment().toDate());
			break;
		case "2":
			$(id).data("DateTimePicker").minDate(moment().toDate());
			break;
	}
}
function mensaje(tipo, mensaje, div){
	switch(tipo){
		case '1':
			$(div).html('<div class="alert alert-success alert-dismissable msj_alerta"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'+mensaje+'</div>');
		break;
		case '2':
			$(div).html('<div class="alert-danger alert-dismissable msj_alerta"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Error: </strong> '+mensaje+'</div>');
		break;
	}
	
	setTimeout(function(){ $(".msj_alerta").alert('close'); }, 3000);
}
function validar_data(valor){
	if(valor != 'undefined'){
		if(isNaN(parseInt(valor))){
			return 0;
		}else{
			if(parseInt(valor) < 0){
				return 0;
			}else{
				return valor;
			}
		}
	}
	return 0;
}
function number_format(a, b, c, d) {
	a = Math.round(a * Math.pow(10, b)) / Math.pow(10, b);
	e = a + '';
	f = e.split('.');
	if (!f[0]) {
		f[0] = '0';
	}
	if (!f[1]) {
		f[1] = '';
	}
	if (f[1].length < b) {
		g = f[1];
		for (i=f[1].length + 1; i <= b; i++) {
			g += '0';
		}
		f[1] = g;
	}
	if(d != '' && f[0].length > 3) {
		h = f[0];
		f[0] = '';
		for(j = 3; j < h.length; j+=3) {
			i = h.slice(h.length - j, h.length - j + 3);
			f[0] = d + i + f[0] + '';
		}
		j = h.substr(0, (h.length % 3 == 0) ? 3 : (h.length % 3));
		f[0] = j + f[0];
	}
	c = (b <= 0) ? '' : c;
	return f[0] + c + f[1];
}

function loader(div){
	$(div).html("Cargando...");
}

function actualizar_datos(cod, info, valor){
	$("tr[data-cod='"+cod+"'] td[data-i='"+info+"']").html(valor);
}