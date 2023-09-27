@extends('dashboard.layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>halaman create data</h1>

                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="judul"
                          value="{{ old('judul')}}" placeholder="Judul Buku">
                        </div>

                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="pengarang"
                          value="{{ old('pengarang')}}" placeholder="Pengarang Buku">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="penerbit"
                          value="{{ old('penerbit')}}" placeholder="Penerbit Buku">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="tahun_terbit"
                          value="{{ old('tahun_terbit')}}">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="gambar">
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">save</button>

                </form>
            </div>
        </div>
    </div>




@endsection
