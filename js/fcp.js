
  $(function(){
  	$('.js-activated').dropdownHover().dropdown();
      
     $(".dropdown, .navegacion").click(function(){
     	$(".dropdown, .navegacion").removeClass('active');
     	$(this).addClass('active');
         // alert($(window).width());
       
     });
     // $(".navbar-toggle").click(function(){
     	
     //    var tamaño=$(window).width();
     // if (tamaño<750){
     // 	 $("a").removeAttr('data-hover');
     	
     // }

     // });

     




    });


