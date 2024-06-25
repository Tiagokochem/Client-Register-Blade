@extends('clients.layout')
 
@section('content')

    <div class="gap-2 mt-4 d-grid d-md-flex justify-content-md-start ">
        <a class="btn btn-success btn-sm" href="{{ route('dashboard') }}"> <i class="fa fa-home"></i>Ir para Dashboard</a>
    </div>
<div class="mt-3 card">
  <h2 class="card-header">Laravel 11 CRUD Clients Application</h2>
  <div class="card-body">
        
        @session('session')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="gap-2 d-grid d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('clients.create') }}"> <i class="fa fa-plus"></i> Create New Client</a>
        </div>

        <table class="table mt-4 table-bordered table-striped">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->detail }}</td>
                    <td>
                        <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
           
                            <a class="btn btn-info btn-sm" href="{{ route('clients.show',$client->id) }}"><i class="fa-solid fa-list"></i> Show</a>
            
                            <a class="btn btn-primary btn-sm" href="{{ route('clients.edit',$client->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
           
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>

        </table>
      
        {!! $clients->links() !!}

  </div>
</div>  
@endsection