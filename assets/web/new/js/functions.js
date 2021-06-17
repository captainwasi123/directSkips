 $(document).ready(function(){


    var host = $("meta[name='host']").attr("content");
 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src",host+"/assets/web/new/images/cross.png")
 		$('.navbar-custom').slideToggle()

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle()
 		$(this).attr("src",host+"/assets/web/new/images/hamburger.png")
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
        $(this).addClass("active");
    });

 });



 