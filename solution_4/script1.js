$(document).ready(function(){
	$(".action_item").on('click', function(){
		$("#action_field").val($(this).children('p').html());
	});
});