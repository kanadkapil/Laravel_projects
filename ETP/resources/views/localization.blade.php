<!DOCTYPE html>
<html>
<head>
    <title>Localization Example</title>
</head>
<body>

    <h1>{{ __('messages.welcome') }}</h1>
    <p><a href="#">{{ __('messages.contact') }}</a></p>
    <button>{{ __('messages.submit') }}</button>

    <hr>
    <p>Choose Language:</p>
    <a href="/lang/en">English</a> |
    <a href="/lang/es">Español</a>

</body>
</html>
