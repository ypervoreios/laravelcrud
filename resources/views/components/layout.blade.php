<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
        <h1>Laravel CRUD</h1>
        <a href="{{ Route('users.index') }}">All users</a>
        <a href="{{ Route('users.create') }}">Create user</a>
        </nav>
    </header>

<main class="container">
    {{$slot}}
</main>


</body>
</html>