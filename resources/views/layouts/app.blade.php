<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Clear cache saat page di-load dari cache (bukan untuk refresh)
    if (window.performance && performance.navigation.type === 2) {
        window.location.reload();
    }
});
</script>

</body>
</html>
