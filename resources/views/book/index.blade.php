@extends('book.layout')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="/book/create" class="btn btn-primary btn-sm">เพิ่มข้อมูล</a>
    <div class="row g-4 py-5">
        @foreach ($books as $book)
            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.pexels.com/photos/2465877/pexels-photo-2465877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>{{ $book->name }}</h4>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                    <a href="/book/{{$book->id}}/edit" class="btn btn-info btn-sm">แก้ไขข้อมูล</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
