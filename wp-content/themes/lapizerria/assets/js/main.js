$(document).ready(function () {
//            alert('jquery is working');

    g_box_adjustment();
    
    $('.gallery-item a').each(function(){
        $(this).attr({'data-fluidbox':''});
    });
    
    if( $('[data-fluidbox]').length > 0 ){
        $('[data-fluidbox]').fluidbox();
    }
	
	//active menu modifier
	// $("li.menu-item-object-page").on("click", function(){
		// $("li.menu-item-object-page").removeClass("current_page_item");
		// alert($(this).css());
		
	// });
	
});


$(window).resize(function () {
        g_box_adjustment();
    });

function g_box_adjustment() {
        //automatic resizing the about us gallery during window resize.
        var images = $('.about-img');
        if (images.length > 0) {
            var imageHeight = images[0].height;
            var content_boxes = $('.about-g-box .g-box-text');

            //i = index, element
            $(content_boxes).each(function (i, element) {
                    $(element).css({'height': imageHeight + 'px'});
            });
            
            var last_box =  $('.about-g-box .g-box-text').last();
            var lastImageHeight = $('.about-img').last().height();
            $(last_box).css({'height': lastImageHeight + 'px'});
            
            //fix boxes that are having small heigt difference
            if ($(window).width() > 768){
                $('div.row.g-box-container').css({'height': (lastImageHeight * 2 - 4)  + 'px','overflow':'hidden'});
            }
            else{
                $('div.row.g-box-container').css({'height':''});
            }
            
            
        }
}