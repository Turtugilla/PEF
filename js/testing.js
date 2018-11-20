function postTOBank(){
	var miCuentaBancaria = {
		 "ctaorigen" : "1445522",
		 "ctadestino" : "1442233",
		 "monto" : 200,
		 "detalle" : "las tortugas son verdes"
	};

    $.ajax({
		type: 'POST',
		url: "https://spbank.herokuapp.com/api/payment",
		data: miCuentaBancaria,
		contentType: 'jsonp',
		crossDomain: true,
		headers: {
			'Access-Control-Allow-Origin': '*'
		},
		success: function(response){
			console.log("testing");
			console.log(response);
		}
	});
}
