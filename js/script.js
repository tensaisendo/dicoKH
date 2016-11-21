$(function(){
    $("#menu").tabs();
    
	$("select.select-theme-dictionnaire").change(function(){
		var test = "";
		$("select.select-theme-dictionnaire option:selected").each(function() {
	    	test += $("select option:selected").val() + " ";

	    	console.log(test);

	    	$("#table-dictionnaire").tablesorter({
				theme : test,
			});
	    });
    }) 
	.change();

	// $("#table-dictionnaire").tablesorter({
	// 	theme : test,
	// });
});