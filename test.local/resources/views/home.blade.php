@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if($item)
                        <form method="GET" action="{{route('bank.accounts.index')}}">
                            <button class="btn btn-primary">Ваші рахунки</button>
                        </form>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
