@extends('layouts.app')

@section('content')
    <h1>Danh sách sách</h1>
    <form action="{{ route('books.search') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm sách">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </div>
    </form>
    @if($books->isEmpty())
        <p>Không tìm thấy sách phù hợp.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Năm xuất bản</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['published_year'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
