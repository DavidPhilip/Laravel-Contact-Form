Hallo {{ Config::get('laravel-contact-form::mail.to.name') }}!

Du hast eine neue Kontaktanfrage über deine Webseite erhalten. Hier sind die Details:

@foreach (Config::get('laravel-contact-form::fields') as $fieldName => $options)

	{{ trans('laravel-contact-form::copy.labels.'.$fieldName) }}    {{ $$fieldName }}

@endforeach

Bis zum nächsten Mal,
David :)