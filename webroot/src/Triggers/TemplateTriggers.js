$(document).ready(function(){
	init();
	function init(){
		ajaxViewTrigger();
	}


	function ajaxViewTrigger(){
	    $('.ajax-view-button').click(function (){
	       response = $(this).ajaxView({methodType: "GET"});



	       alert($(this).attr('data-render-in'))
	      $($(this).attr('data-render-in')).html(response);
	    });		
	}
});
