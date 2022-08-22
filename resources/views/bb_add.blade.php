@extends('layouts.base')
@section('title','Добавление объявления :: Мои объявления')

@section('main')

<form action=" {{ route( 'bb.store') }}" method="POST"> 
    @csrf 
    <div class="form-group"> 
        <label for="txtTitle">Toвap</label> 
        <input name="title" id="txtTitle" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror"> 
        @error('title')
            <span class="invalid-fiidback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> 
    <div class="form-group"> 
        <label for="txtContent">Oпиcaниe</label> 
        <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="З">{{old('content')}}</textarea> 
        @error('content')
            <span class="invalid-fiidback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> 
        <div class="form-group"> 
            <label for="txtPrice">Цeнa</label> 
            <input name="price" id="txtPrice" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror"> 
            @error('price')
                <span class="invalid-fiidback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 
    <input type="submit" class="btn btn-primary" vаluе="Добавить"> 
</form> 
@endsection