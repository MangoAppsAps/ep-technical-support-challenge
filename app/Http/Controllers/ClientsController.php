<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $clients = Client::where('user_id', $userId)->get();
        foreach ($clients as $client) {
            $client->append('bookings_count');
        }

        return view('clients.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function show($client)
    {
        $userId = auth()->user()->id;
        $client = Client::where('user_id', $userId)
            ->where('id', $client)
            ->with('bookings')
            ->with('journals')
            ->first();

        return view('clients.show', ['client' => $client]);
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->address = $request->get('address');
        $client->city = $request->get('city');
        $client->postcode = $request->get('postcode');
        $userId = auth()->user()->id;
        $client->user_id = $userId;

        $client->save();

        return $client;
    }

    public function destroy($client)
    {
        $userId = auth()->user()->id;
        Client::where('id', $client)
            ->where('user_id', $userId)
            ->delete();

        return 'Deleted';
    }
}
