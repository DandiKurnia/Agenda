@extends('layouts.main')

@section('content')
    <div class="container pt-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ url('agendaguru/'.$data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="name" readonly value="{{ auth()->user()->name  }}"">
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        </fieldset>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">user_id</label>
                            <input type="text" name="user_id" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" readonly value="{{ auth()->user()->id  }}">
                            @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mata pelajaran</label>
                                <select class="form-select" name="mapel_id">
                                    <option selected>{{ $data->mapel->mapel }}</option>
                                    @foreach ($datamapel1 as $data1)
                                    {{-- @if ($data->level == 'guru')    --}}
                                    <option value="{{$data1->id}}">{{ $data1->mapel }}</option>
                                    {{-- @endif --}}
                                    @endforeach
                                </select>
                                @error('user_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
                            <input type="text" name="materi" class="form-control" id="exampleInputEmail1" value="{{ $data->materi }}"
                                aria-describedby="emailHelp">
                            @error('materi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mulai</label>
                            <input type="time" name="jam_mulai" class="form-control" id="exampleInputEmail1" value="{{ $data->jam_mulai }}"
                                aria-describedby="emailHelp">
                            @error('jam_mulai')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Selesai</label>
                            <input type="time" name="jam_selesai" class="form-control" id="exampleInputEmail1" value="{{ $data->jam_selesai }}"
                                aria-describedby="emailHelp">
                            @error('jam_selesai')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Absend</label>
                            <input type="text" name="absen" class="form-control" id="exampleInputEmail1" value="{{ $data->absen }}"
                                aria-describedby="emailHelp">
                            @error('absen')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" value="{{ $data->kelas }}"
                                aria-describedby="emailHelp">
                            @error('kelas')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="pembelajaran">
                                <option selected>{{ $data->pembelajaran }}</option>
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
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1" value="{{ $data->link }}"
                                    aria-describedby="emailHelp">
                                @error('link')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                                <input type="file" name="dokumentasi" class="form-control" id="exampleInputEmail1" value="{{ $data->dokumentasi }}"
                                    aria-describedby="emailHelp">
                                @error('dokumentasi')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" value="{{ $data->keterangan }}"
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