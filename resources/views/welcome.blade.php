<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HELLO WORLD</h1>
    <form action="/" method="POST">
        @csrf
        <input type="text" name="username" id="">
        <button type="submit">Submit</button>
    </form>
    <form action="/1" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="username" id="">
        <button type="submit">Submit PUT</button>
    </form>
    <form action="/10" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Submit DELETE</button>
    </form>
</body>

</html>