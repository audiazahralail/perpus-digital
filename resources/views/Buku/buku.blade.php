@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><th><font color="navy">LIST BUKU</font></th></div>

                    <div class="card-body">
                        <div class="mb-4">
                            <a href="{{route('buku.create')}}" class="btn btn-primary">
                                + TAMBAH DATA BUKU
                            </a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <tr bgcolor="royalblue" align=center>
                                    <th><font color="white">FOTO BUKU</font></th>
                                    <th><font color="white">JUDUL BUKU</font></th>
                                    <th><font color="white">PENULIS</font></th>
                                    <th><font color="white">SINOPSIS</font></th>
                                    <th><font color="white">PENERBIT</font></th>
                                    <th><font color="white">TAHUN TERBIT</font></th>
                                    <th><font color="white">AKSI</font></th>
                                </tr></tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' .$b->foto) }}" alt="Foto Buku" width="100">
                                        </td>
                                        
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->sinopsis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td>
                                            <form action="{{route('buku.hapus', $b->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                                <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-primary">
                                                    <i class="fas fa-fw fa-pen"></i>
                                                </a>
                                        </td>
                                    
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection