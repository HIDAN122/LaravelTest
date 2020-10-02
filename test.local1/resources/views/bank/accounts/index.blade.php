@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="btn btn-primary" href="{{route('bank.accounts.create')}}">Добавити</a>
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
                <td>
                    <a href="{{route('bank.accounts.edit',$item->id)}}">
                        {{$item->name}}
                    </a>
                </td>
                <td>{{$item->en_name}}</td>
                <td>Balance:{{$item->balance}}</td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection

