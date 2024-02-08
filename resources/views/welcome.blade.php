<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Your App</title>
</head>
<body>
    <div>
        <h1>Welcome to Your App</h1>

        @auth
        {{-- {{auth::user()->id}}  --}}
            <p>You are logged in. <a href="{{ url('/home') }}">Go to Dashboard</a></p>
        @else
            <p>You are not logged in. <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a></p>
        @endauth

        

    </div>
</body>
</html>
