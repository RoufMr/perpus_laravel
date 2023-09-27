@extends('dashboard.layouts.main')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <div>
                    <h3 class="text-center">Detail Buku</h3>
                </div>
                <a class="btn btn-primary" href="{{ route('buku.create') }}">Tambah Data</a>
                <table id="table" class="table table-bordered" style="width:100%" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ($bukus as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->pengarang }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ date('Y', strtotime($b->tahun_terbit)) }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('buku.destroy', $b->id ) }}" method="POST">
                                    <a href="{{ route('buku.edit', $b->id ) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                                </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Belum tersdia
                            </div>
                        @endforelse


                    </tbody>
                  </table>
            </div>
        </div>
    </div>


@endsection
