@extends('layouts.layout')

@section('content')
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

        @foreach($labels  as $label)
            <x-input>
                <x-slot name="label">
                    {{$label}}
                </x-slot>
            </x-input>
        @endforeach

        <x-button>
            <x-slot name="button">
                {{$signIn}}
            </x-slot>
        </x-button>
    </form>

@endsection
