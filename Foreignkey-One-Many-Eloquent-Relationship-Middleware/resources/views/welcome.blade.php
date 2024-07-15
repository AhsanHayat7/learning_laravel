<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Page</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }
        .welcome-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .welcome-message h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to the Page</h1>
        <p>This is your custom welcome message.</p>
        @if($user_id)
            <p>User ID: {{ $user_id }}</p>
        @else
            <p>User not logged in</p>
        @endif
    </div>
</body>
</html>
