<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST" action ="{{route('calculate')}}">
        @csrf
        <h2>Enter your First Number</h2>
        <input type="number" name="num1" placeholder="Enter first number" required>
        <h2 >Enter your Second Number</h2>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <button type="submit" name="operation" value="Add">+</button>
        <button type="submit" name="operation" value="Subtract">-</button>
        <button type="submit" name="operation" value="Multiply">*</button>
        <button type="submit" name="operation" value="Divide">/</button>
    </form>
    <br><br>
    @if(session('result'))
        <h3>Results : {{session('result')}}</h3>
    @endif
</body>
</html>




