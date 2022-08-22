@extends('layouts.base')
@section('title','Мои объявления')

@section('main')
<h2>Добро пожаловать, {{Auth::user()->name}}!</h2>
<p class="text-right">
    <a href="{{route('home.add')}}">Добавить объявление</a>
</p>
 @if (count($bbs) > 0) 
    <table class="table table-striped"> 
        <thead> 
            <tr> 
                <th>Toвap</th> 
                <th>Цена, pyб.</th>
                <th colspan="2">&nbsp;</th>
             </tr> 
        </thead> 
        <tbody> 
            @foreach ($bbs as $bb) 
            <tr> 
                <td>
                    <h3>{{ $bb->tile }}</h3>
                </td> 
                <td>{{ $bb->price }}</td> 
                <td> 
                    <a  href="{{route('bb.edit',$bb->id)}}">Изменить</a> 
                </td> 
                <td> 
                    <a  href="{{route('bb.delete',$bb->id)}}">Удалить</a> 
                </td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
    @endif 
@endsection
