@extends('layouts.main')

@section('content')
<div class="col-xl-12 mb-5 mb-xl-0">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session()->has('edit'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('edit') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Agenda</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('admin/create') }}" class="btn btn-sm btn-primary">Absen</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Materi</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Absen</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pembelajaran</th>
                        <th scope="col">Link Pembelajaran</th>
                        <th scope="col">Dokumentasi</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->user->name }}</td>
                        <td>{{ $row->mapel->mapel }}</td>
                        <td>{{ $row->materi }}</td>
                        <td>{{ $row->jam_mulai }}</td>
                        <td>{{ $row->jam_selesai }}</td>
                        <td>{{ $row->absen }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>{{ $row->pembelajaran }}</td>
                        <td>{{ $row->link }}</td>
                        {{-- <td>{{ $row->dokumentasi }}</td> --}}
                        <td>
                            <img src="{{ asset('imageagenda/'.$row->dokumentasi) }}" alt="" style="width: 50px">
                        </td>
                        <td>{{ $row->keterangan }}</td>
                        <td class="d-flex">
                            <a href="{{ url('admin/'.$row->id.'/edit') }}" class="button bg-transparent mr-2"><i
                                    class="fa fa-pencil-square-o text-yellow" aria-hidden="true"></i></a>
                            {{-- <button class="badge" href="/show{{ $row->id }}"></button> --}}
                            <form method="POST" action="{{ url('admin/'.$row->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="button bg-transparent border-0"><i
                                        class="fa fa-times text-red" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
