<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello there</h1>
    <form action="/register" method='POST'>
        @csrf
        <input name='name' type="text" placeholder='name'>
        <input name='email' type="email" placeholder='email'>
        <input name='password' type="password" placeholder='password'>
        <button>Register</button>
    </form>
</body>
</html>