<?php
  
namespace App\Http\Controllers;
  
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
  
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $clients = Client::latest()->paginate(5);
        
        return view('clients.index', compact('clients'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clients.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientStoreRequest $request): RedirectResponse
    {   
        Client::create($request->validated());
         
        return redirect()->route('clients.index')
                         ->with('success', 'Client created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Client $client): View
    {
        return view('clients.show',compact('client'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client): View
    {
        return view('clients.edit',compact('client'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(ClientUpdateRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());
        
        return redirect()->route('clients.index')
                        ->with('success','Client updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();
         
        return redirect()->route('clients.index')
                        ->with('success','Client deleted successfully');
    }
}