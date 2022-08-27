
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
    <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg">
    <button type="submit">crere</button>
</form>
</body>
</html>