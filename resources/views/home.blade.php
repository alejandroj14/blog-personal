@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{asset('images/home3.svg')}}" class="card-img-top py-4" alt="Home" height="250">
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>¡Ya estas logueado!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
