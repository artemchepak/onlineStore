@extends('layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
>
        <h1>
            {{$category->name}} {{$category->products->count()}}
        </h1>
        <p>
            В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
        </p>
        <div class="row">
            @foreach($category->products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        </div>

@endsection
