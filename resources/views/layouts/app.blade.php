<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sách</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('books.index') }}">Danh sách sách</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>Đây là footer của trang web.</p>
</footer>
</body>
</html>
