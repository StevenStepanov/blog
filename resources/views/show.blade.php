<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="h-full flex justify-center items-center">
    <div class="max-w-2xl">
    <a href="/">tagasi</a>
        <div class="text-2xl font-bold">{{ $book->title }}</div>
    <div class="flex mt-4">
    <div class="w-1/3 p-4">
        <img src="{{ $book->cover_path }}" alt="">
    </div>
    <div class="w-2/3 flex flex-col">
        <div>Autor(id):
        @foreach ($book->author as $author)
        <span class="font-bold">{{ $author->last_name }}, {{ $author->first_name }}</span>
        @endforeach
        </div>
        <span>{{ $book->summary }}</span>
        <span class="font-bold">Aasta: {{$book->release_date }}</span>
        <span class="font-bold"> {{ $book->pages }} lk.</span>
        <span class="font-bold">Keel: {{ $book->language }} </span>
        <span class="font-bold">Tüüp: {{ $book->type }} </span>
        <span class="text-right font-bold text-4xl"> {{ number_format($book->price, 2) }} € </span>
        <span class="text-right text-sm">Laoseis {{ $book->stock_saldo }} </span>
        <button class="bg-green-500 px-4 py-2 rounded">Lisa korvi</button>
    </div>
    </div>
    </div>
</body>
</html>
