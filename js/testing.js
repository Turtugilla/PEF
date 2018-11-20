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
		contentType: 'json',
		success: function(data){
			console.log(data);
		},
		error: function (data) {
			console.log(data);
		}
	});
}
