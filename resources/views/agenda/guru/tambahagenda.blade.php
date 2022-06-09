@extends('layouts.main')

@section('content')
<div class="container pt-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('agendaguru') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- <fieldset disabled> --}}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value=""
                            aria-describedby="name" p>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        </fieldset>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">user_id</label>
                            <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" readonly value="{{ auth()->user()->id }}"
                                aria-describedby="emailHelp">
                            @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mata_pelajaran" class="form-control" id="exampleInputEmail1" value="{{ old("mata_pelajaran") }}"
                                aria-describedby="emailHelp">
                            @error('mata_pelajaran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
                            <input type="text" name="materi" class="form-control" id="exampleInputEmail1" value="{{ old("materi") }}"
                                aria-describedby="emailHelp">
                            @error('materi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jam Pelajaran</label>
                            <input type="time" name="jam_pelajaran" class="form-control" id="exampleInputEmail1" value="{{ old("jam_pelajaran") }}"
                                aria-describedby="emailHelp">
                            @error('jam_pelajaran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Absend</label>
                            <input type="text" name="absen" class="form-control" id="exampleInputEmail1" value="{{ old("absen") }}"
                                aria-describedby="emailHelp">
                            @error('absen')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('kelas')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="pembelajaran">
                                <option selected>Pembelajaran</option>
                                <option value="ptm">PTM</option>
                                <option value="pjj">PJJ</option>
                            </select>
                            @error('pembelajaran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1" value="{{ old("link") }}"
                                    aria-describedby="emailHelp">
                                @error('link')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                                <input type="file" name="dokumentasi" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('dokumentasi')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" value="{{ old("keterangan") }}"
                                    aria-describedby="emailHelp">
                                @error('keterangan')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
