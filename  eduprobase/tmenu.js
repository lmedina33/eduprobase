$(document).ready(function() {
	$('#men').click(function() {
		$('#tmenu ').css({'top' : '50px'});
		$('#tmenu').slideToggle("slow");
	});
});

		
$(document).ready(function(){
 
$('.acc_container').hide();
$('.acc_trigger:first')
    .addClass('active')
    .next()
    .show();
 
$('.acc_trigger').click(function(){
    if( $(this).next().is(':hidden') ) {
        $('.acc_trigger')
            .removeClass('active')
            .next()
            .slideUp();
        $(this).toggleClass('active')
            .next()
            .slideDown();
    }
    return false;
});
 
});