<div class="wpcmfadmin">
<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});
});
</script>

   <form method="post" name="wpcalc_osago_ukr_options" action="options.php">
  <?php wp_nonce_field('update-options'); ?>
 <?php $options = get_option('wpcosago_ukr'); ?> 
<a href="http://wpcalc.com/" target="_blank"><img src="<?php echo plugins_url('knowhow-logo.png', __FILE__); ?>"></a>
        <h2>Настройка калькулятора ОСАГО</h2>
<div class="wpcmfadmintext">
Для интеграции калькулятора ОСАГО в страницу или запись используйте шорткод <b>[wpcosagoukr]</b>. По всем возникающим вопросам обращайтесь по адресу ad@wpcalc.com. Наш сайт - <a href="http://wpcalc.com/">wpcalc.com</a><p/>
Полную версию калькулятора с отправкой почты можете скачать здесь <a href="http://wpcalc.com/plagin-kalkulyatora-osago-dlya-ukrainy/">http://wpcalc.com/plagin-kalkulyatora-osago-dlya-ukrainy/</a><p/>
</div>          
<div style="padding:20px;"></div>
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Город</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" >Тип авто</label>
 
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Стаж</label>
	
	<input id="tab4" type="radio" name="tabs">
    <label for="tab4">Статус</label>
 
    <input id="tab5" type="radio" name="tabs">
    <label for="tab5">Срок</label>
	
	<input id="tab6" type="radio" name="tabs">
    <label for="tab6">База</label>	
 
    <section id="content1">
        <p>
		<p><span><input type="number" name="wpcosago_ukr[city1]" value="<?php echo $options['city1']; ?>" step="0.01"/></span> - Киев</p>

<p><span><input type="number" name="wpcosago_ukr[city2]" value="<?php echo $options['city2']; ?>" step="0.01"/></span> - Борисполь, Боярка, Бровары, Васильков, Вишневое, Вышгород, Ирпень</p>

<p><span><input type="number" name="wpcosago_ukr[city3]" value="<?php echo $options['city3']; ?>" step="0.01"/></span> - Одесса, Харьков</p>

<p><span><input type="number" name="wpcosago_ukr[city4]" value="<?php echo $options['city4']; ?>" step="0.01"/></span> - Днепропетровск, Донецк, Запорожье, Кривой Рог, Львов</p>

<p><span><input type="number" name="wpcosago_ukr[city5]" value="<?php echo $options['city5']; ?>" step="0.01"/></span> - Алчевск, Бердянск, Белая Церковь, Винница, Горловка, Днепродзержинск, Евпатория, Житомир, Ивано-Франковск, Каменец-Подольский, Керчь, Кировоград, Краматорск, Кременчуг, Лисичанск, Луганск, Луцк, Макеевка, Мариуполь, Мелитополь, Николаев, Никополь, Павлоград, Полтава, Ровно, Севастополь, Северодонецк, Симферополь, Славянск, Сумы, Тернополь, Ужгород, Херсон, Хмельницкий, Черкасы, Черновцы, Чернигов</p>

<p><span><input type="number" name="wpcosago_ukr[city6]" value="<?php echo $options['city6']; ?>" step="0.01"/></span> - другие населенные пункты Украины</p>

<p><span><input type="number" name="wpcosago_ukr[city7]" value="<?php echo $options['city7']; ?>" step="0.01"/></span> - зарегистрированные в других странах</p>
        </p>
    </section>  
    <section id="content2">
        <p>
          <p><span><input type="number" name="wpcosago_ukr[auto1]" value="<?php echo $options['auto1']; ?>" step="0.01"/></span> - Мотоциклы и мотороллеры до 300 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto2]" value="<?php echo $options['auto2']; ?>" step="0.01"/></span> - Мотоциклы и мотороллеры больше 300 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto3]" value="<?php echo $options['auto3']; ?>" step="0.01"/></span> - Легковые автомобили до 1 600 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto4]" value="<?php echo $options['auto4']; ?>" step="0.01"/></span> - Легковые автомобили 1 601 – 2 000 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto5]" value="<?php echo $options['auto5']; ?>" step="0.01"/></span> - Легковые автомобили 2 001 – 3 000 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto6]" value="<?php echo $options['auto6']; ?>" step="0.01"/></span> - Легковые автомобили свыше 3 000 см³</p>

<p><span><input type="number" name="wpcosago_ukr[auto7]" value="<?php echo $options['auto7']; ?>" step="0.01"/></span> - Прицепы к грузовым автомобилям</p>

<p><span><input type="number" name="wpcosago_ukr[auto8]" value="<?php echo $options['auto8']; ?>" step="0.01"/></span> - Прицепы к легковым автомобилям</p>

<p><span><input type="number" name="wpcosago_ukr[auto9]" value="<?php echo $options['auto9']; ?>" step="0.01"/></span> - Грузовые автомобили грузоподъемностью до 2 тонн</p>

<p><span><input type="number" name="wpcosago_ukr[auto10]" value="<?php echo $options['auto10']; ?>" step="0.01"/></span> - Грузовые автомобили грузоподъемностью больше 2 тонн</p>

<p><span><input type="number" name="wpcosago_ukr[auto11]" value="<?php echo $options['auto11']; ?>" step="0.01"/></span> - Автобусы с количеством мест для сидения до 20</p>

<p><span><input type="number" name="wpcosago_ukr[auto12]" value="<?php echo $options['auto12']; ?>" step="0.01"/></span> - Автобусы с количеством мест для сидения больше 20</p>
        </p>
    </section> 
    <section id="content3">
        <p>
          <p><span><input type="number" name="wpcosago_ukr[stag1]" value="<?php echo $options['stag1']; ?>" step="0.01"/></span> - Водительский стаж меньше трех лет</p>

<p><span><input type="number" name="wpcosago_ukr[stag2]" value="<?php echo $options['stag2']; ?>" step="0.01"/></span> - Водительский стаж три года и больше</p>



		</p>
    </section> 
	<section id="content4">
        <p>
          <p><span><input type="number" name="wpcosago_ukr[status1]" value="<?php echo $options['status1']; ?>" step="0.01"/></span> - Физическое лицо</p>

<p><span><input type="number" name="wpcosago_ukr[status2]" value="<?php echo $options['status2']; ?>" step="0.01"/></span> - Юридическое лицо</p>

<p><span><input type="number" name="wpcosago_ukr[status3]" value="<?php echo $options['status3']; ?>" step="0.01"/></span> - Льготник</p>
        </p>
    </section> 
    <section id="content5">
        <p>
         <p><span><input type="number" name="wpcosago_ukr[srok1]" value="<?php echo $options['srok1']; ?>" step="0.01"/></span> - 12 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok2]" value="<?php echo $options['srok2']; ?>" step="0.01"/></span> - 11 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok3]" value="<?php echo $options['srok3']; ?>" step="0.01"/></span> - 10 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok4]" value="<?php echo $options['srok4']; ?>" step="0.01"/></span> - 9 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok5]" value="<?php echo $options['srok5']; ?>" step="0.01"/></span> - 8 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok6]" value="<?php echo $options['srok6']; ?>" step="0.01"/></span> - 7 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok7]" value="<?php echo $options['srok7']; ?>" step="0.01"/></span> - 6 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok8]" value="<?php echo $options['srok8']; ?>" step="0.01"/></span> - 5 месяцев</p>
<p><span><input type="number" name="wpcosago_ukr[srok9]" value="<?php echo $options['srok9']; ?>" step="0.01"/></span> - 4 месяца</p>
<p><span><input type="number" name="wpcosago_ukr[srok10]" value="<?php echo $options['srok10']; ?>" step="0.01"/></span> - 3 месяца</p>
<p><span><input type="number" name="wpcosago_ukr[srok11]" value="<?php echo $options['srok11']; ?>" step="0.01"/></span> - 2 месяца</p>
<p><span><input type="number" name="wpcosago_ukr[srok12]" value="<?php echo $options['srok12']; ?>" step="0.01"/></span> - 1 месяц</p>
<p><span><input type="number" name="wpcosago_ukr[srok13]" value="<?php echo $options['srok13']; ?>" step="0.01"/></span> - 15 дней</p>
        </p>
    </section> 
<section id="content6">
        <p>
          <p><span><input type="number" name="wpcosago_ukr[baze]" value="<?php echo $options['baze']; ?>" step="0.01"/></span> - Базовый страховой платеж</p>


<p><span><input type="number" name="wpcosago_ukr[wpcalc_osago_size]" value="<?php echo $options['wpcalc_osago_size']; ?>" /> px</span> - Размер текста результатов</p>

<p><span><input type="text" class="colorbox" name="wpcosago_ukr[wpcalc_osago_color]" value="<?php echo $options['wpcalc_osago_color']; ?>" /> </span> - Цвет результатов (<a href="http://wpcalc.com/color-konverter/" target="_blank">выбор цвета</a>)</p>


<p><span><input type="text" name="wpcosago_ukr[wpcalc_osago_button]" value="<?php echo $options['wpcalc_osago_button']; ?>" /> </span> - Текст кнопки "Заказать"</p>
        </p>
    </section>	

            
   <input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpcosago_ukr" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
</div>
