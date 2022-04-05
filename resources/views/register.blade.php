<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-control">
            <label for="kodeuser">Kodeuser</label>
            <input type="text" name="kodeuser" id="kodeuser">
        </div>
        <div class="form-control">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="form-control">
            <label for="status">Status</label>
            <input type="text" name="status" id="status">
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-control">
            <label for="ket">Ket</label>
            <textarea name="ket" id="ket"></textarea>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
