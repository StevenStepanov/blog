<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Raamatukogu</title>
</head>
<body class="p-12">
    <table class="w-full table-auto">
        <thead class="font-bold">
            <tr>
                <td class="px-4 py-2"><a href="?sort=title">Pealkiri</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=author">Autor</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=release_date">Aasta</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=language">Keel</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=pages">Lehekülgi</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=price">Hind</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=stock_saldo">Laoseis</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=type">Tüüp</a></td>
            </tr>
        </thead>
        <tbody class="text-sm">
        @foreach($books as $book)
        <tr>
            <td class="border px-4 py-2"><a href="/book/{{ $book->id }}">{{ $book->title }}</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2">{{ $book->release_date }}</td>
            <td class="border px-4 py-2">{{ $book->language }}</td>
            <td class="border px-4 py-2 ">{{ $book->pages }}</td>
            <td class="border px-4 py-2">{{ $book->price }}</td>
            <td class="border px-4 py-2">{{ $book->stock_saldo }}</td>
            <td class="border px-4 py-2">{{ $book->type }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $books->withqueryString()->links() }}
</body>
</html>
