@extends('layouts.app')

@section('title', 'Partners')

@section('content')
    <div class="container">
        <a href="/partners" class="btn btn-primary mb-3"><i class="bx bx-chevron-left"></i> Back</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection