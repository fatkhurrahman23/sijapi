<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <h1>REGISTER</h1>
        
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="password_confirmation">Confirm Password</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>