@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="container">
        <a href="/clients" class="btn btn-primary mb-3"><i class="bx bx-chevron-left"></i> Back</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $client->title }}">
                    </div>
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $client->image }}" style="max-width: 65%;margin:0 auto;display:block" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection