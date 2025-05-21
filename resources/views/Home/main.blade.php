<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Frederico27/todolist-livewire/public/assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Frederico27/todolist-livewire/public/assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
</head>

<body>
    @livewireStyles
    @includeUnless($boolean, 'Home.navbar')
    @yield('content')
    @includeUnless($boolean,'Home.footer')
    @livewireScripts
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/Frederico27/todolist-livewire/public/assets/js/scripts.js"></script>
<script src="https://cdn.reflowhq.com/v2/toolkit.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Frederico27/todolist-livewire/public/assets/js/bs-init.js"></script>

{{-- //Modal --}}
<script>
    $('#myModal').modal('show'); 
</script>
