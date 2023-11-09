<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Prompts\Note;

class NoteController extends Controller
{
    @return Response

    public function index()
    {
        $user = Auth::id();
        $notes = Note::where('user_id', $userId)->get();
        dd($notes)
        
    }

    @return Response

    public function create()
    {

    }
}
