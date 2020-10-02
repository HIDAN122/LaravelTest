@include('layouts.app')

@section('content')

<table>
    @foreach($item as $transact)
        <tr>
            <td>{{$transact->name}}</td>
            <td>Summ:{{$transact->sum}}</td>
            <td>{{$transact->transaction_id}}</td>
        </tr>

    @endforeach
</table>
@endsection
