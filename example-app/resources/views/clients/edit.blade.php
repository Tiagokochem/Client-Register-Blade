@extends('clients.layout')
  
@section('content')

<div class="mt-5 card">
  <h2 class="card-header">Edit Product</h2>
  <div class="card-body">

    <div class="gap-2 d-grid d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('clients.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                value="{{ $client->name }}"
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Detail:</strong></label>
            <textarea 
                class="form-control @error('detail') is-invalid @enderror" 
                style="height:150px" 
                name="detail" 
                id="inputDetail" 
                placeholder="Detail">{{ $client->detail }}</textarea>
            @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>

  </div>
</div>
@endsection