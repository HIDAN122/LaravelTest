@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="btn btn-primary" href="{{route('bank.accounts.transactions.create')}}">Добавити</a>
    </nav>
    <table>
        @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>Summa:{{$item->sum}}</td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection
