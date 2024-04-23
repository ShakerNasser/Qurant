<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qurant</title>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div>
        <p>Hello there.</p>
        <p>Here is your message: <strong>{{ $message }}</strong></p>
    </div>
    </body>
</html>
