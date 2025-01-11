@extends('components.main')

@section('content')
<div class="container mt-5">
    <h1>{{ $user->name }}</h1>
    <h1>{{ $user->gender }}</h1>
    <h1>{{ $user->hobbies }}</h1>
    <h1>{{ $user->instagram }}</h1>
    <h1>{{ $user->phone }}</h1>
</div>
@endsection