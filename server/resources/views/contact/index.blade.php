@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('contact.create') }}">
                        <button type="submit" class="btn btn-primary">
                            新規登録
                        </button>
                    </form>

                    <hr>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">your_name</th>
                            <th scope="col">title</th>
                            <th scope="col">created_at</th>
                            <th scope="col">show</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->your_name }}</td>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td><a href="{{ route('contact.show',['id' => $contact->id]) }}">show</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
