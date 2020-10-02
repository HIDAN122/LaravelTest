@extends('layouts.app')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
            @section('content')
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
            <td>Усі рахунки</td>
            <a href="{{route('bank.transactions.index')}}">Список всіх транзакцій по всіх рахунках</a>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>{{$item->en_name}}</td>
                    <td>Balance:{{$item->balance}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>

            @endforeach
        </table>
        @endsection


