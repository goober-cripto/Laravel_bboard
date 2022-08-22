@extends('layouts.base')
@section('title','Правка объявлений :: Мои объявления')

@section('main')

<form action=" {{ route( 'bb.update', $bb->id) }}" method="POST"> 
   @csrf 
   @method('PATCH')
    <div class="form-group"> 
        <label for="txtTitle">Toвap</label> 
        <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror"  value="{{old('title',$bb->tile)}}"> 
        @error('title')
            <span class="invalid-fiidback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> 
    <div class="form-group"> 
        <label for="txtContent">Oпиcaниe</label> 
        <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="З">{{old('content',$bb->content)}}</textarea> 
        @error('content')
            <span class="invalid-fiidback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> 
        <div class="form-group"> 
            <label for="txtPrice">Цeнa</label> 
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{old('price',$bb->price)}}"> 
            @error('price')
                <span class="invalid-fiidback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 
    <input type="submit" class="btn btn-primary" vаluе="Добавить"> 
</form> 
@endsection