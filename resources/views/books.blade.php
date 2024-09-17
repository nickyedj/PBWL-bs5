<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <a class="btn btn-primary mb-3" href="{{ route('books.form') }}">Form Buku</a>

        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Jml Halaman</th>
                            <th>Pengarang</th>
                            <th>Email Pengarang</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Rilis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libs as $lib)
                            <tr>
                                <td>{{ $lib->id }}</td>
                                <td>{{ $lib->title }}</td>
                                <td>{{ $lib->page_count }}</td>
                                <td>{{ $lib->author_name }}</td>
                                <td>{{ $lib->author_email }}</td>
                                <td>{{ $lib->description }}</td>
                                <td>{{ $lib->published_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @vite(['resources/js/app.js'])
</body>

</html>
