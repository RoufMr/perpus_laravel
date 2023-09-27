@extends('dashboard.layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>halaman edit data</h1>

                <form action="{{ route('buku.update', $buku->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="judul"
                          value="{{ old('judul', $buku->judul) }}" placeholder="Judul Buku">
                        </div>

                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="pengarang"
                          value="{{ old('pengarang', $buku->pengarang) }}" placeholder="Pengarang Buku">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="penerbit"
                          value="{{ old('penerbit', $buku->penerbit) }}" placeholder="Penerbit Buku">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control @error('title') is-invalid @enderror" id="inputPassword" name="tahun_terbit"
                          value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <img src="{{ asset('storage/buku/'.$buku->gambar) }}" class="img-thumbnail rounded mb-1" style="width: 200px">
                        <input type="file" name="gambar" class="form-control">
                    </div>



                    <button class="btn btn-success" type="submit">save</button>

                </form>
            </div>
        </div>
    </div>




@endsection
