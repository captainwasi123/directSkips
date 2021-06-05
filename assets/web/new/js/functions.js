 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png")
 		$('.navbar-custom').slideToggle()

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle()
 		$(this).attr("src","images/hamburger.png")
 		val1 = 0;

 	}
 	})
 })





$(document).ready(function(){
    $(document).on('click', '.all-buttons label', function(){
        $(".all-buttons").children("label").removeClass("active-btn");
        $(this).addClass("active-btn");
    });



    $(document).on('click', '.skip-box', function(){
        $(".skip-box").removeClass("active");
        $(".skip-box").find("input").removeAttr('checked');
        $(this).addClass("active");
        $(this).find("input").attr('checked','checked');
    });

 });



 