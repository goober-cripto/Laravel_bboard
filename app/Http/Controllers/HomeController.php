<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bb;
use Illuminate\Auth\Events\Validated;

class HomeController extends Controller
{
    private const BB_VALIDATOR = [
        'title' =>'required|max:50',
        'content' => 'required',
        'price'=>'required|numeric'
    ];

    private const ВВ_ERROR_МESSAGES = [ 
        'price.required' => 'Раздавать товары бесплатно нельзя',
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длинее :max символов',
        'numeric' => 'Введите число'
    ] ; 
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home',[
            'bbs'=>Auth::user()->bbs()->latest()->get()
        ]);
    }
    /* Добавить объявление */
    public function showAddВbForm(){
        return view('bb_add');
    }

    /*Добавление объявления через POST и перенаправление в home*/
    public function storeВb(Request $request){
        $validate = $request->validate(self::BB_VALIDATOR,self::ВВ_ERROR_МESSAGES);
        Auth::user()->bbs()->create([
            'tile' => $validate['title'],
            'content' => $validate['content'],
            'price' => $validate['price'],
        ]);

        return redirect()->route('home');
    }
    /*выводит страницу для правки объявлений */
    public function showEditBbFrom(Bb $bb){
        return view('bb_edit', [
            'bb' => $bb,
        ]);
    }
    /*обновление объявлений */
    public function updateBb(Request $request, Bb $bb){
        $validate = $request->validate(self::BB_VALIDATOR,self::ВВ_ERROR_МESSAGES);
        $bb->fill([
            'tile' => $validate['title'],
            'content' => $validate['content'],
            'price' => $validate['price'],
        ]);
        $bb->save();

        return redirect()->route('home');
    }

    /*удаление объявлений */
    public function showDeleteBbForm(Bb $bb){
        return view('bb_delit', [
            'bb' => $bb,
        ]);
    }

    public function destroyBb(Bb $bb){
        $bb->delete();
        return redirect()->route('home');
    }
}

