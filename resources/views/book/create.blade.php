@extends('layouts.layout')


@section('content')
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @foreach ($labels as $label)
            <x-input :label="$label">
           
            </x-input>
        @endforeach
        <x-button value='send' type='submit' >
         
        </x-button>
    </form>
@endsection