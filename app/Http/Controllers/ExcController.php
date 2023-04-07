<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ExcController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax()){
        $search = $request->search;
        $client = Client::where(function($query) use ($search) {
            $query->where('Nom', 'like', "%{$search}%")->orWhere('prenom', 'like', "%{$search}%");
        }) ->orderBy('id', 'ASC')->get();


        return view('search',compact('client'));
        }
    }

}