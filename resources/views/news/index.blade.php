<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-gray-200 w-full h-full font-sans">
    
    <div class="container">

        <div class="card-body">
            <h1 class="text-center pb-12 text-2xl font-bold">Event Listener</h1>
        
        <form action="/subscribe" method="POST">
            @csrf
            <input type="text"
            name="email"
            placeholder="Enter Email"
            class="px-4 py-2 shadow-xl rounded-xl"
            >

            <button class="bg bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded-full" type="submit">
                Submit
            </button>
        </form>
        
        </div>
    </div>
</body>
</html>