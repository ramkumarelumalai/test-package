<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Us Page</h1>
    <form action="{{route('contact')}}" method='post'>
    @csrf
    <input type='text' name='name' placeholder='Enter your name'>
    <input type='text' name='Email' placeholder='Enter your Email'>
    <textarea name='message'></textarea>
    <input type='submit' value='submit'> 
    </form>
</body>
</html>