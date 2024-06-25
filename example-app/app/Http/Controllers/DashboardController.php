<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    


    public function index()
{
    // Lógica para buscar os dados que você quer exibir na dashboard
    $clients = Client::all(); 
    $totalClients = $clients->count();

    return view('dashboard', compact('clients', 'totalClients')); // Passa a variável $clients para a view

}



}
