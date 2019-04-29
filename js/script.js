$(document).ready(function(){
    $('.cns-btn').click(function(){
        $('.form-up').css('display','flex');
    });
    $(document).click(function(e){
        var div = $('.cns-btn');
        var forma = $('.form-up');
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && forma.has(e.target).length === 0) { // и не по его дочерним элементам
			$('.form-up').hide(); // скрываем его
		}
    });
});