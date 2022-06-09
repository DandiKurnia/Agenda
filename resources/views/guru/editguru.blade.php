@extends('layouts.main')

@section('content')
    <div class="container pt-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ url('guru/'.$data->id) }}"">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="user_id" class="form-control" id="exampleInputEmail1"
                            aria-describedby="user_id" value="{{ $data->user_id }}">
                            @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        </fieldset>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->nik }}">
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