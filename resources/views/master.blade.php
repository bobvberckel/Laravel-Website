<!doctype html>
<html lang="nl">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <title>Bobhub</title>
</head>

<body>
        <!-- Navigation Bar -->
        <a href="{{ route("home") }}">Home</a>
        <a href="{{ route("about") }}">About</a>
        <a href="{{ route("music") }}">Music</a>
        <a href="{{ route("cars") }}">Cars</a>
        <a href="{{ route("movies") }}">Movies</a>
        <a href="{{ route("profile") }}">Profile</a>
        <a href="{{ route("contact.form") }}">Contact</a>
        <!-- Echo pagecontent -->
        @yield("content")

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>