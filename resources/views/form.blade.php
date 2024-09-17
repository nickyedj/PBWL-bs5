<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Form</title>
</head>

<body>
    <h1>Form Buku</h1>
    <div class="container-fluid !direction !spacing">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-5">
                        <label class="form-label" for="title">Judul Buku</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Masukkan Judul Buku">
                    </div>
                    <div class="col">
                        <label class="form-label" for="published_date">Tanggal Rilis</label>
                        <input id="published_date" class="form-control w-50" type="date" name="published_date" />
                    </div>
                </div>
                <div class="row-">
                    <div class="col-4 ">
                        <label class="form-label" for="page_count"> Jumlah Halaman</label>
                        <input class="form-control" type="text" name="page_count" placeholder=" Masukan Jml Halaman">
                    </div>
                    <div class="col-4 ">
                        <label class="form-label" for="author_name">Nama Pengarang</label>
                        <input class="form-control" type="text" name="author_name" placeholder="Nama pengarang">
                    </div>
                    <div class="col-4 ">
                        <label class="form-label" for="author_email"> Email Pengarang</label>
                        <input class="form-control" type="text" name="author_email" placeholder="Email pengarang">
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label" for="description"> Deskripsi Buku </label>
                        <textarea class="form-control" type="text" id="description" name="description" rows="2"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary mt-2" type="submit"> Kirim </button>
                <br>
                <a btn btn-danger href="{{ route('books') }}">Kembali</a>
            </form>
        </div>
    </div>


    @vite(['resources/js/app.js'])
</body>

</html>
x
