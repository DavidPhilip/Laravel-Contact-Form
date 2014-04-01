<html>
	<body>
		<p>Hallo {{ Config::get('laravel-contact-form::mail.to.name') }}!</p>
		<p>Du hast eine neue Kontaktanfrage über deine Webseite erhalten. Hier sind die Details:</p>
		@foreach (Config::get('laravel-contact-form::fields') as $fieldName => $options)
			<p>{{ trans('laravel-contact-form::copy.labels.'.$fieldName) }}    {{ nl2br($$fieldName) }}</p>
		@endforeach
	</body>
</html>