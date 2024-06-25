@extends('clients.layout')

@section('content')
<div class="container px-4 mx-auto sm:px-8">
    <h2 class="text-2xl font-semibold leading-tight text-gray-800">Dashboard</h2>

    <div class="py-12">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div class="p-6 bg-white rounded-lg shadow-md">
                <div class="text-xl font-semibold text-blue-600">Total de Clientes</div>
                <div class="text-gray-600">{{ $totalClientes }}</div>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <div class="text-xl font-semibold text-green-600">Total de Pedidos</div>
                <div class="text-gray-600">{{ 12345 }}</div>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <div class="text-xl font-semibold text-indigo-600">Faturamento Total</div>
                <div class="text-gray-600">{{ 'R$ ' . number_format('1234', 2, ',', '.') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
