

$(document).ready(function(){
	$('#add_quote').on('click',function(){
		var quote = $('#quote').val();
		

		var csrf = $('#csrf-token').val();
		$.ajax({
			url: '/api/addquote',
			 type: "POST",
			data: {quotes:quote},
			headers: {
        		'X-CSRF-TOKEN': csrf
    		},
			success: function (data) {
				jQuery.each(data.errors, function(key, value){
                  	$('.alert-danger').show();
                  	$('.alert-danger').append('<p>'+value+'</p>');
                });
                if(!data.errors) {
                	location.href=location.href;
                }
			},
			

		});

	});

	$('#edit_quote').on('click',function(){
	
		var quotes = $('#quotes').val();
		var id_quote = $('#id_quote').val();
		var csrf = $('#csrf-token').val();
		$.ajax({
			url: '/api/edit/'+id_quote,
			type: "POST",
			data: {quotes:quotes,id:id_quote},
			headers: {
        		'X-CSRF-TOKEN': csrf
    		},
			success: function (data) {
				jQuery.each(data.errors, function(key, value){
                  	$('.alert-danger').show();
                  	$('.alert-danger').append('<p>'+value+'</p>');
                });
                if(!data.errors) {
                	location.href=location.href;
                }
			},
			

		});

	});
	/*$('#delete_article').on('click',function(){
		location.href=location.href;
	});
	$(".delbutton").click(function() {
        var del_id = $(this).attr("id");
        if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
        	$.ajax({
            	type : "GET",
            	url : '/api/deletepost/'+del_id,

           		//data : info,
            	success : function() {
            		location.href=location.href;
            	}
         	});
       	}
        return false;
     });*/
    
});


