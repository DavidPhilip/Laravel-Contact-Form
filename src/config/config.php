<?php

return array(

	'uri' => 'kontakt',

	'view' => 'laravel-contact-form::contact',

	'fields' => array(
		'name' => array(
			'type' => 'text',
		),
		'company' => array(
			'type' => 'text',
		),
		'phone' => array(
			'type' => 'text',
		),
		'email' => array(
			'type' => 'text',
		),
		'enquiry' => array(
			'type' => 'textarea',
		),
	),

	'rules' => array(
		'name' => 'required',
		'phone' => 'numeric|min:8',
		'email' => 'required|email',
		'enquiry' => 'required',
	),

	'mail' => array(
		'views' => array(
			'laravel-contact-form::emails.html.enquiry',
			'laravel-contact-form::emails.text.enquiry',
		),
		'to' => array(
			'name' => 'Paul',
			'email' => 'paul@leisch.co.at',
		),
		'subject' => 'Kontaktaufnahme via Webseite (http://www.leisch.co.at)',
	),

	'page_title' => 'Kontaktieren Sie mich',
	'meta_description' => 'Füllen Sie dieses Formular aus, um mit mir in Kontakt zu treten.',
	'meta_keywords' => 'Kontakt',

);