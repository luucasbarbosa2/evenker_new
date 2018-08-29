$(document).ready(function(event){
    $('table').DataTable();
    
    if($(".toast-success").text()){
        $(".toast-success").addClass("hidden")
        Materialize.toast($(".toast-success").text(), 4000)
    }
    $(".ui.dropdown").dropdown(); 

   	$(".ui.dropdown").each(function(index, el) {


       $(this).dropdown('set selected', $(this).attr('data-selected'))
   			
   	});		 	

     $( ".droppable-area" ).sortable({
      connectWith: ".connected-sortable",
      stack: '.connected-sortable div'
    }).disableSelection();
   
});

