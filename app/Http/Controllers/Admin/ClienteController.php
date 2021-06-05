<?php

namespace Login\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Login\Clients;
use Login\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function index()
    {
        $clients = Clients::all();
        return view('admin.listing')->with('clients', $clients);
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $client = [
            'firstName' => $request->firstName,
            'secondName' => $request->secondName,
            'birthDate' => $request->birthDate,
            'father' => $request->father,
            'mom' => $request->mom
        ];

        Clients::create($client);

        return redirect()->action('Admin\ClienteController@index');
    }
}
