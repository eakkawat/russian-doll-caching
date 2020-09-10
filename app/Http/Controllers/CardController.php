<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function index()
    {
        return view('cards.index', ['cards'=> Card::with('notes')->get()] );
    }
    
}
