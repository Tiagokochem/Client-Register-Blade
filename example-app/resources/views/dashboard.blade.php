<x-app-layout> 
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('clients.index') }}" class="inline-block px-6 py-2 ml-4 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                Cadastro de Clientes
            </a>
        </div>
    </x-slot>


@foreach($clients as $client) 
    @include('components.dashboard-card', ['client' => $client, 'totalClients' => $totalClients])
@endforeach
</x-app-layout>
