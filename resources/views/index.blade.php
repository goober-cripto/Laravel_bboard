@extends('layouts.base')
@section('title','Главная')
@section('main')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Товар</th>
            <th scope="col">Цена. руб.</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bbs as $bb)
                @if ($bbs->count() > 0)
                    <tr>
                        <td><h3>{{$bb->tile}}</h3></td>
                        <td>{{$bb->price}}</td>
                        <td><a href="{{route('detail',$bb->id)}}">Подробнее ...</a></td>
                    </tr>
                @endif
            @endforeach
        </tbody>
      </table>
@endsection