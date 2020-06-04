@extends('layouts.master')
@section('content')

        <h1>
            {{$category->name}}
        </h1>
        <p>
           {{$category->description}}
        </p>
        <div class="row">
            @foreach($category->products as $product)
                @include('layouts.card', compact('product'))
            @endforeach

@endsection
