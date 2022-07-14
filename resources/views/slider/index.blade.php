@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')
    <div class="container">
        <a href="/sliders/create" class="btn btn-primary mb-3">Tambah Gambar</a>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $i = 1   
                @endphp
                @foreach ($sliders as $slider)
                <td>{{ $i++ }}</td>
                <td>{{ $slider->title }}</td>
                <td>
                    <img src="/image/{{$slider->image}}" alt="" class="img-fluid">
                </td>
                <td>
                    <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection