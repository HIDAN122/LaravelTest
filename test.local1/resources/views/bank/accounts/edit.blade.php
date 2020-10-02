@extends('layouts.app')

@section('content')

    @if($item->exists)
        <form method="POST" action="{{route('bank.accounts.update',$item->id)}}">
            @method('PUT')
            @csrf
            @endif
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
            <div class=" row justify-content-center">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#maindata">Основні
                                                дані</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="maindata" role="tabpanel">
                                            <div class="form-group">
                                                <label for="name">Ім'я рахунку</label>
                                                <input name="name" value="{{$item->name}}"
                                                       id="name"
                                                       type="text"
                                                       class="form-control"
                                                       minlength="3"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="en_name">Ім'я рахунку на англійській</label>
                                                <input name="en_name" value="{{$item->en_name}}"
                                                       id="en_name"
                                                       type="text"
                                                       class="form-control"
                                                       minlength="3"
                                                       required>
                                            </div>

                                            <div class="form-group">
                                                <label for="balance">Баланс</label>
                                                <input name="balance" value="{{$item->balance}}"
                                                       id="balance"
                                                       type="integer"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>ID:{{$item->id}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Створено</label>
                                        <input type="text" value="{{$item->created_at}}" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Змінено</label>
                                        <input type="text" value="{{$item->updated_at}}" class="form-control" disabled>
                                    </div>
                                    <a href="{{route('bank.accounts.destroy',['id' => $item->id])}}">Видалити
                                        рахунок</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('bank.accounts.index')}}">Усі рахунки</a>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <a href="{{route('bank.transactions.index')}}">Транзакції по цьому рахунку</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
@endsection

