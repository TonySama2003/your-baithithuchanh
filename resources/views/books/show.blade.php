
@extends('layouts.app')

@section('content')
    <h1>Chi tiết sách</h1>

    <div>
        <h2>Tên sách: {{ $book->title }}</h2>
        <p>Tác giả: {{ $book->author }}</p>
        <p>Năm xuất bản: {{ $book->published_year }}</p>
        <p>Mô tả: {{ $book->description }}</p>
        <!-- Thêm các trường thông tin khác của sách -->
    </div>
@endsection
