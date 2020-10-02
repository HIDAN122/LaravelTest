@extends('layouts.app')

@section('content')
    @if($item->exists)
        <form method="POST" action="{{route('bank.accounts.update',$item->id)}}">
            @method('PATCH')
            @else
                <form method="POST" action="{{route('bank.accounts.store')}}">
                    @endif
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
                                @include('bank.accounts.includes.item_edit_main_col')
                            </div>
                            <div class="col-md-3">
                                @include('bank.accounts.includes.item_edit_add_col')
                            </div>
                        </div>
                    </div>
                </form>
@endsection
