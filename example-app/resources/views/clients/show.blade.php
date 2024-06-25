@extends('clients.layout')
  
@section('content')

<div class="mt-5 card">
  <h2 class="card-header">Show Product</h2>
  <div class="card-body">

    <div class="gap-2 d-grid d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('clients.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                {{ $client->name }}
            </div>
        </div>
        <div class="mt-2 col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong> <br/>
                {{ $client->detail }}
            </div>
        </div>
    </div>

  </div>
</div>
@endsection