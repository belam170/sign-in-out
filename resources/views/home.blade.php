<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome dear user</h1>
    <form action="/logout" method='POST'>
        @csrf
        <button>Logout</button>
    </form>
</body>
</html>