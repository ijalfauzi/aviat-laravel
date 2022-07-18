@extends('layouts.app')

@section('title', 'Daftar Klien')

@section('content')
    <div class="container">
        <a href="/sliders/create" class="btn btn-primary mb-3">Add Image</a>
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $i = 1   
                @endphp
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->title }}</td>
                    <td style="text-align: center">
                        <img src="/image/{{$slider->image}}" alt="" style="max-width:65%" class="img-fluid">
                    </td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning mb-2"><i class="bx bx-edit"></i></a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection