<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!--Revoke Authentication-->
        @csrf
        <input type="text" name="name" placeholder="name" autocomplete="off">
        <input type="text" name="age" placeholder="age" autocomplete="off">
        <input type="text" name="username" placeholder="username" autocomplete="off">
        <button type="submit">Submit</button>
    </form>
</body>
</html>