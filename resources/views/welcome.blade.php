<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel project</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to my first Laravel project</h1>
    <p>This is the first Laravel project I have created.</p>
    <p>Click the button below to see the list of users:</p>
    <a href="/users" class="btn mt-4 inline-block">Find users</a>
</body>
</html>