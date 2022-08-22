<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <title>@yield('title') :: Объявления</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('style/min.css')}}">

    </head> 
        <body> 
            <div class="container"> 
                <nav class="navbar navbar-light bg-light"> 
                        <a href="{{ route ( 'index') }}" class=navbar-brand mr-auto>Главная</a> 
                        <div class="ml-auto form-inline">
                            @guest
                                <a href="{{ route ( 'register' ) }}" class="nav-item nav-link ">Регистрация</a> 
                                <a href="{{  route('login') }}" class="nav-item nav-link">Вxoд</a> 
                            @endguest
                            <a href= "{{ route ( 'home') }} " class="nav-item nav-link">Мoи объявления</a> 
                           @auth
                            <form action="{{ route ( 'logout') }}"  method="POST" > 
                                    @csrf 
                                    <input type="submit" class='btn btn-danger' value="Выход"> 
                                </form>
                           @endauth 
                        </div>
                </nav> 
                <h1 class="my-3 text-center">Объявления</h1>
                @yield('main')
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        </body> 
</html>
