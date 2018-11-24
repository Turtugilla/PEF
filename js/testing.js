function postTOBank(monto,detalle){


    $.ajax({
		type: 'POST',
		url: "https://pollitosenfuga.herokuapp.com/orders-updte.php",
		
		//crossDomain: true,
		/*headers: {
			'Access-Control-Allow-Origin': '*',
			'Access-Control-Allow-Headers': '*',
			'Access-Control-Allow-Methods': '*'
		},*/
		success: function(response){
			 var miCuentaBancaria = {
				 'ctaorigen' :  '0000000000000002',
				 'ctadestino' : '0000000000000003',
				 'monto' : 500,
				 'detalle' : 'testing'
			};
			
			$.ajax({
			    type: 'POST',
			    url:   'https://spbank.herokuapp.com/api/payment.php'.
			    data: miCuentaBancaria,
			    success: function(response){
			      console.log(response);
			   
			      }
				
			
			});
		}
	});
}

function miphp(){
	$.ajax({
		type: 'POST',
		url: "https://pollitosenfuga.herokuapp.com/surtir-huevos.php",
		data: miCuentaBancaria,
		contentType: 'json',
		//crossDomain: true,
		/*headers: {
			'Access-Control-Allow-Origin': '*',
			'Access-Control-Allow-Headers': '*',
			'Access-Control-Allow-Methods': '*'
		},*/
		success: function(response){
			console.log("testing");
			console.log(response);
		}
	});
}



function getGET()
{
	// capturamos la url
	var loc = document.location.href;
	// si existe el interrogante
	if(loc.indexOf('?')>0)
	{
		// cogemos la parte de la url que hay despues del interrogante
		var getString = loc.split('?')[1];
		// obtenemos un array con cada clave=valor
		var GET = getString.split('&');
		var get = {};
		// recorremos todo el array de valores
		for(var i = 0, l = GET.length; i < l; i++){
			var tmp = GET[i].split('=');
			get[tmp[0]] = unescape(decodeURI(tmp[1]));
		}
		return get;
	}
}



window.onload = function()
{
	// Cogemos los valores pasados por get
	var valores=getGET();
	if(valores)
	{
		//recogemos los valores que nos envia la URL en variables para trabajar con ellas
		var nombre = valores['nombre'];
		var edad = valores['edad'];
		// hacemos un bucle para pasar por cada indice del array de valores
		for(var index in valores)
		{
			console.log(valores[index]);
		}
	}
};


