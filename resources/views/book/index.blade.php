@extends('layouts.layout')


@section('content')
<div class="flex flex-wrap">
    @foreach($books as $book)
        <x-card>
            <x-slot name="source">
                {{$book['name']}}
            </x-slot>

            <x-slot name="title">
                {{$book['price']}}
            </x-slot>

            <x-slot name="body">
                {{$book['isbm']}}
            </x-slot>
        </x-card>
    @endforeach
</div>
@endsection
