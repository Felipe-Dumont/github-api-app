<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        @yield('content')

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</body>

<script>
    document.querySelector('#formUser').addEventListener('submit', function (event) {
    var nameInput = document.querySelector('#username');

    if (nameInput.value.trim() === '') {
        event.preventDefault();
        alert('O campo nome não pode estar em branco.');
    }
});
</script>
</html>
