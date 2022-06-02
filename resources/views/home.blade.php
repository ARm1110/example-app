@extends('layouts.layout')

@section('content')
    <h1 class="bg-red-500">hello rasol</h1>
    <div class="d-flex flex-wrap justify-content-between gap-3">
        @foreach ($cards as $card)
            <x-card>
                <x-slot name="title">
                    {{ $card['title'] }}
                </x-slot>
                <x-slot name="body">
                    {{ $card['body'] }}
                </x-slot>
            </x-card>
        @endforeach
    </div>
@endsection
