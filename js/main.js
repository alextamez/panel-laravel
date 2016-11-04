$(document).ready(function(){

	//--Eliminar Usuario--
	$(".btn-eliminar").click(function(){

		var _baseurl = "/panel-laravel";
		var _id = $(this).val();

		var user_status = confirm("¿Estas seguro de eliminar este registro?");

		if (user_status)
		{
			$.ajaxSetup({
		       headers: {
		           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		       }
		    });

			$.ajax({
				type: "POST",
	            url: _baseurl + "/delete",
	            data: {id: _id},
	            success: function (data) {
	                //console.log(data);

	                $("#usr" + _id).remove();
	                //alert(data.mensaje);
	            },
	            error: function (data) {
	                //console.log('Error:', data);
	            }
		    });
		}

	});

	//--Agregar Usuario--
	$("#btn-agregar").click(function(){
		$("#myModal").modal("show");
	});

});