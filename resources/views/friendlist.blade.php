@extends('components.main')

@section('content')
    <div class="container">
        <h1>{{ $username }} friend list</h1>
        <div class="mt-4">
            @foreach ($users as $user)
                <div class="row">
                    <div class="col">
                        $user->name
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger"></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
