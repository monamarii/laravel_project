@props([
    'title' => 'Laracasts'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        a:hover {
            color: red
        }
    </style>
</head>
<body>

    <body class="bg-neutral-200 p-6 max-w-xl mx-auto">

    <main>
        {{ $slot }}
    </main>

</body>
</html>