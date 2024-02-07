<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\User;

class PhoneController extends Controller
{
    public function index()
    {
        $phones=Phone::all();
        return view('phones.index', ['phones'=>$phones]);
    }

    public function create()
    {
        $users=User::all();
        return view('phones.create', ['users'=>$users]);

    }
    public function store(Request $request)
    {
        Phone::craete($request->all());
        return redirect()
        ->route('phones.index')
        ->with('success', 'Telefonul a fost adugat cu succes');
   }

    public function show(string $id)
    {

    }

}
