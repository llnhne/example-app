@extends('layouts.app')
@section('content')
    <h1>This is About Page</h1>
    {{ 
    $x = 100;
     }}
    @if ($x > 2)
        <h3>1 is less than 2</h3>
    @elseif($x < 10)
        <h3>x is less than 10</h3>
    @else
        <h3>All condtions are not match</h3>
    @endif
    {{-- @unless (empty($name))
        <h3>Name is not empty</h3>
    @endunless --}}
    {{-- @if (!empty($name))
        <h3>Name is not empty</h3>
    @endif --}}
    {{-- @empty(!$name)
        <h3>Name is  NOT empty</h3>
    @endempty --}}
    {{-- @empty($age)
        <h3>Ages is empty</h3>
    @endempty
    @isset($name)
        <h3>Name has been set</h3>
    @endisset
    @switch($name)
        @case('Lan Anh')
            <h3>This is ms Lan Anh</h3>
            @break
        @case('Trung Anh')
        <h3>This is mr Trung Anh</h3>
            @break
        @default
            <h3>No one selected</h3>
    @endswitch --}}
    {{-- @for ($i = 0; $i < 20; $i++)
        <h2> i = {{ $i }}</h2>
    @endfor
    @forelse ($names as $item)
        <h3>All Name: {{ $item }}</h3>
    @empty
        <h3>The aray is empty</h3>
    @endforelse --}}
    {{-- {{ $i=0 }}
    @while ($i<10)
        <h3>i = {{ $i }}</h3>
        {{ $i++ }}
    @endwhile --}}
@endsection