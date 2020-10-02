@include('layouts.app')


<form method="POST" action="{{route('bank.transactions.store')}}">
    @csrf

    <div class="container">
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
                                            <label for="sum">Сума транзакції</label>
                                            <input name="sum" value="{{$item->sum}}"
                                                   id="sum"
                                                   class="form-control"
                                                   minlength="3"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Опис</label>
                                        <textarea name="description"
                                                  id="description"
                                                  class="form-control"
                                                  rows="3">{{$item->description}}</textarea>
                                        <br>
                                        <div class="col-md-3">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <button type="submit" class="btn btn-primary">Створити
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

