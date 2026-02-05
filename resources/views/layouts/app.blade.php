<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>My Dashboard</title>
</head>
<body style="margin: 0; padding: 0;">
    <div class="dashboard-wrapper" style="display: flex; min-height: 100vh;">
        
        @include('partials.sidebar')

        <main class="main-content" style="flex-grow: 1; background-color: #f8f9fe;">
            @yield('content')
        </main>
        
    </div>
</body>

</html>