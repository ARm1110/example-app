@extends('layouts.layout')
@section('content')
<div class="flex flex-wrap">
    @foreach($cards as $card)
        <x-card>
            <x-slot name="source">
                {{$card['source']}}
            </x-slot>

            <x-slot name="title">
                {{$card['title']}}
            </x-slot>

            <x-slot name="body">
                {{$card['body']}}
            </x-slot>
        </x-card>
    @endforeach
</div>
@endsection

