@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="btn btn-primary" href="{{route('bank.transactions.create')}}">Добавити</a>
    </nav>
    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    {{session()->get('success')}}
                </div>
            </div>
        </div>

    @endif
    <table>
        @foreach($items as $item)
            <tr>
                <td>{{$item->sum}}</td>
                <td>{{$item->description}}</td>
            </tr>
        @endforeach
    </table>
    <div class="col-md-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('bank.accounts.index')}}">Усі рахунки</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

