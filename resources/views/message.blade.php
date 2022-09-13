@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <form action="{{route('message')}}" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="text" name="email">
            <input type="text" name="id">
            <input type="submit" value="submit">

        </form>

        </div>
    </div>
</div>
@endsection
