<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="POST">
    @csrf
        <label>氏名<br><input type="text" name="name"></label>
        <br>
        <label>メールアドレス<br><input type="email" name="email"></label>
        <br>
        <input type="submit" value="送信する">
    </form>
</body>
</html>