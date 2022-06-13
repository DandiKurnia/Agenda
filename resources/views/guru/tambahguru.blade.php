@extends('layouts.main')

@section('content')
<div class="container pt-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('guru') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- <fieldset disabled> --}}
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
                                <select class="form-select" name="user_id">
                                    <option selected>Nama Guru</option>
                                    @foreach ($datauser as $data)
                                    {{-- @if ($data->level == 'guru')    --}}
                                    <option value="{{$data->id}}">{{ $data->name }}</option>
                                    {{-- @endif --}}
                                    @endforeach
                                </select>
                                @error('user_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </fieldset>
                        <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mata pelajaran</label>
                                <select class="form-select" name="mapel_id">
                                    <option selected>Mata Pelajaran</option>
                                    @foreach ($datamapel as $data1)
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
                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                            <input type="number" name="nik" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('nik')
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
