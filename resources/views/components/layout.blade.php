<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>
<body>
    <header>
        <nav>
        <h1>Laravel CRUD</h1>
        <a href="/users">All users</a>
        <a href="/users/create">Create user</a>
        </nav>
    </header>

<main class="container">
    {{$slot}}
</main>


</body>
</html>