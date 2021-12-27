@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>
                    <img src="images/pinkboy.jpg" alt="" width="120" style="border-radius: 100%; margin-bottom: 12px;"> 
                    <p><strong>Name</strong>: {{ Auth::user()->name }}</p>
                    <p><strong>Email</strong>: {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
