<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Sales;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('first_name')
            ->get(['id', 'first_name', 'last_name', 'address', 'phone', 'credit_limit'])
            ->map
            ->only('id', 'first_name', 'last_name', 'address', 'phone', 'credit_limit');

        return inertia('Clients/Index', compact('clients'));
    }

    public function show(Client $client)
    {
        $sales = Sales::with('soldItem')
            ->where('client_id', $client->id)
            ->get(['id', 'date', 'is_credit'])
            ->map(function ($data) {
                return [
                    'id' => $data->id,
                    'date' => $data->date,
                    'is_credit' => $data->is_credit,
                    'amount' => optional($data->soldItem)->amount
                ];
            });

        $client->makeHidden(['created_at', 'updated_at']);

        return inertia('Clients/Show', compact('client', 'sales'));
    }
}
