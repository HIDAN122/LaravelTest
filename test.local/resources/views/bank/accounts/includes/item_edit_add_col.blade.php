@php
    /** @var \App\Models\Account   $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Зберегти</button>
            </div>

        </div>
        <br>
    </div>
</div><br>
{{--<div class="row justify-content-center">--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <form method="POST" action="{{route('bank.accounts.destroy',$item->id)}}">--}}
{{--                    @method('DELETE')--}}
{{--                    @csrf--}}
{{--                <button class="btn btn-danger">Видалити</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--    </div>--}}
{{--</div><br>--}}

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

            </div>
        </div>
    </div>
</div><br>

