<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
      <form action="/login" method='POST'>
        @csrf
       <input name='loginname' type="text">
       <input name='loginpassword' type="password"> 
       <button>Login</button>
      </form>
    </div>
</body>
</html>