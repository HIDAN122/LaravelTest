@php
    /** @var \App\Models\Account $item */
    /** @var \Illuminate\Database\Eloquent\Collection $categoryList */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata">Основні дані</a>
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
                            <label for="balance">Баланс</label>
                            <input name="balance" value="{{$item->balance}}"
                                   id="balance"
                                   type="integer"
                                   class="form-control">
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="account_id">Ідентифікатор рахунку</label>--}}
{{--                            <input name="user_id" value="{{$item->user_id}}"--}}
{{--                                   id="account_id"--}}
{{--                                   type="integer"--}}
{{--                                   class="form-control">--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label for="description">Опис</label>
                            <textarea name="description"
                                      id="description"
                                      class="form-control"
                                      rows="3">{{old('description',$item->description)}}</textarea>
                        </div>
                        <form method="POST" action="{{route('bank.transactions.index')}}">
                            <button class="btn btn-primary">Транзакції по цьому рахунку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
