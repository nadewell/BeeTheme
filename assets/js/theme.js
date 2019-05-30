jQuery(document).ready(function(){

    // parallax image
    jQuery('.post-thumb').each(function(){
        var image_src = jQuery(this).data('image');
        jQuery(this).css('background-image','url('+image_src+')');
        console.log(image_src);
    });

})