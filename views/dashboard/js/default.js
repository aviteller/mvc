$(document).ready(function() {


	$.get("dashboard/ajaxGetListing", function( o ) {


		for (var i = 0; i < o.length; i++){
			$('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
		}
	}, 'json');
	

/*	('body').on('submit', '#listInserts', function(e){

	});
*/


	$('body').on('submit', '#randomInsert', function(e){
		e.preventDefault();

		var url = $(this).attr('action');
		var data = $(this).serialize();
        $.ajax({
         data: data,
         dataType: 'json',
         type: 'post',
         url: url,
         success: function(data){
         	console.log(data.text);
         	$('#listInsert').append('<div>' + data.text + '<a class="del" rel="'+ data.id +'" href="#">X</a></div>')
         },
      });
	});
    $('body').on('click', '.del', function(){
    	var id = $(this).attr('rel');
    	var	delItem = $(this);
    	 $.ajax({
         data: {id},
         type: 'post',
         url: 'dashboard/ajaxDeleteListing',
         success: function(data){
         	delItem.parent().remove();
         },
      });
    });

});


