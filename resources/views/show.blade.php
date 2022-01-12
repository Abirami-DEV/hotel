<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        {{-- <img src="{{url('/images/myimage.jpg')}}" alt="Image"/> --}}
        <img src="{{ asset($photo->path) }}" alt="554545" title="" alt="Responsive image">
    </div>
</body>
</html>
