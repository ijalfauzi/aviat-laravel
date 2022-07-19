@extends('layouts.app')

@section('title', 'Partners')

@section('content')
    <div class="container">
        <a href="/partners/create" class="btn btn-primary mb-3"><i class="bx bx-plus"></i>Add Image</a>
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
                @foreach ($partners as $partner)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $partner->title }}</td>
                    <td style="text-align: center">
                        <img src="/image/{{$partner->image}}" alt="" style="max-width:65%" class="img-fluid">
                    </td>
                    <td>
                        <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-warning mb-2"><i class="bx bx-edit"></i></a>
                        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST">
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