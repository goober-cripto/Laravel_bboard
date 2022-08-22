@extends('layouts.base')
@section('title', $bb->tile)
@section('main')
    <h2>{{ $bb->tile }}</h2> 
    <p>{{ $bb->content }} </p> 
    <p>{{ $bb->price }} руб. </p> 
    <p>Автор: {{ $bb->user->name }}</p> 
    
    <form action=" {{ route( 'bb.destroy', $bb->id) }}" method="POST"> 
        @csrf 
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Удалить">
    </form>
    <p>
        <a href="{{route('index')}}">Нa перечень объявлений</a>
    </p> 
@endsection        