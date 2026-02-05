
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-side.css') }}">
    <title></title>
</head>
<body>
    <nav class="sidebar" style="width: 250px; background-color: #2c3e50; color: white; min-height: 100vh; padding: 20px;">
    <h3>My App guuwa</h3>
    <ul style="list-style: none; padding: 0; margin-top: 20px;" class="nav-menu">
        <li style="margin-bottom: 15px;"><a href="/home" style="color: white; text-decoration: none;">Home</a></li>
        <li style="margin-bottom: 15px;"><a href="/dashboard" style="color: white; text-decoration: none;">Dashboard</a></li>
    </ul>
</nav>

@extends('layouts.app')

@section('content')
<div style="padding: 30px;">
    <header class="top-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 1px solid #f0f0f0; padding-bottom: 20px;">
        <div>
            <h1 style="font-size: 24px; margin: 0;">Hi, Kim Namjoon</h1>
            <p style="color: #5a32a3; margin: 5px 0 0 0;">Let's finish your task today!</p>
        </div>
        <div class="icon-notif" style="cursor: pointer;">🔔</div>
    </header>

    <section class="hero-banner" style="background: white; border-radius: 20px; padding: 40px; display: flex; justify-content: space-between; align-items: center;">
        <div class="hero-text">
            <h1 style="font-size: 40px;">Today Task</h1>
            <p style="color: #888;">Check your daily tasks and schedules</p>
            <button style="background: #5a32a3; color: white; border: none; padding: 12px 20px; border-radius: 10px; cursor: pointer; margin-top: 15px;">
                Today's schedule
            </button>
        </div>
        <div class="hero-img">
            <img src="https://via.placeholder.com/200" style="width: 250px;" alt="Illustration">
        </div>
    </section>
</div>
@endsection
</body>
</html>


