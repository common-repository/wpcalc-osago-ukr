<?php

    $send_general = array(
		'maskphone' => '+9 (999) 999-99-99',		
		'thank' => 'Thank you. We will contact you shortly',
		'colorthank' => '#a03717',
		'sizethank' => '18',
		'timer' => '3',
		'sendmail' => 'admin@example.com',
		'subject' => 'Letter from the site',
		'name' => 'Name',
		'mail' => 'E-mail',
		'phone' => 'Phone',
		'review' => 'Review',
		'errcolor' => '#a03717',
		'errreview' => 'Write a Review',
		'errname' => 'Enter Name',
		'errmail' => 'Enter e-mail',
		'errphone' => 'Enter phone',
		'errreview_required' => '1',
		'errname_required' => '1',
		'errmail_required' => '1',
		'errphone_required' => '1'
		
		
		);
	add_option('send_general', $send_general);
	
	$send_modal = array(				
		'button_send' => 'To send',
		'title_display' => '1',
		'title' => 'Feedback form',
		'text_display' => '1',
		'text' => 'Write to us and we will contact you shortly',
		'textarea_display' => '1',
		'textarea' => 'Write a Review',
		'name_display' => '1',
		'name' => 'your name',
		'email_display' => '1',
		'email' => 'mail@example.org',
		'phone_display' => '1',
		'phone' => 'your phone',		
		'max_width' => '440',
		'color' => '#555555',
		'padding' => '10',
		'border' => '1',
		'border_color' => '#383838',
		'background_color' => '#ffffff',
		'padding_form' => '0'		
		);
	add_option('send_modal', $send_modal);