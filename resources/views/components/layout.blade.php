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
         <a href="/ideas"><h1 class="mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">IDEAS</h1></a>
        {{ $slot }}
    </main>

</body>
</html>