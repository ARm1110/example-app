@extends('layouts.layout')




@section('content')
    @foreach ($inputs as $input)
        <x-input>
            <x-slot name="input">
                {{ $input }}
            </x-slot>
        </x-input>
    @endforeach
    <x-button>
        <x-slot name="button">
            {{ $button }}
        </x-slot>
    </x-button>
@endsection
