<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-control">
            <label for="kodeuser">Kodeuser</label>
            <input type="text" name="kodeuser" id="kodeuser">
        </div>
        <div class="form-control">
            <label for="pass">Password</label>
            <input type="pass" name="pass" id="pass">
        </div>
        <button type="submit">Login</button>
    </form>
</body>

</html>
