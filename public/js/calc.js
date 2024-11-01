jQuery(document).ready(function(){
	jQuery("#wpcmfcalc").on('click', function(){
		var f1 = jQuery("#f1").val();
		var f2 = jQuery("#f2").val();
		var f3 = jQuery("#f3").val();
		var f4 = jQuery("#f4").val();
		var f5 = jQuery("#f5").val();
		var f6 = jQuery("#f6").val();		
		var res_text_2 = jQuery("#f2 option:selected").text();
		var res_text_3 = jQuery("#f3 option:selected").text();
		var res_text_4 = jQuery("#f4 option:selected").text();
		var res_text_5 = jQuery("#f5 option:selected").text();
		var res_text_6 = jQuery("#f6 option:selected").text();
        var p2 = f1*f2*f3*f4*f5*f6;
		var prin2 = Math.round(p2*100)/100;
		 var result_send = 'Место регистрации автомобиля: ' + res_text_2 + '; Тип транспортного средства: ' + res_text_3 + '; Стаж вождения: ' + res_text_4 + ' Статус страхователя: ' + res_text_5 + ' Срок страхования: ' + res_text_6 + ' Страховой платеж: ' + prin2;     
		jQuery("#wpcalc-result").html(prin2);
		jQuery("#wpcmf_result_send").html(result_send);
	});
    jQuery("#wpcmfcalc").trigger('click');
});









   