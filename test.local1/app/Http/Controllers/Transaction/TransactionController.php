<?php

namespace App\Http\Controllers\Transaction;
use App\Models\Account;
use App\Models\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $items = Transaction::all();

        return view('bank.transactions.index',compact('items'));
    }

    public function create()
    {
        $item = new Transaction();

        return view('bank.transactions.create', compact('item'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $item = Transaction::create($data);

        if ($item) {
            return redirect()->route('bank.transactions.index', [$item->id])
                ->with('Вашу транзакцію успішно створено');
        } else {
            return back()->withErrors('Помилка створення')
                ->withInput();
        }
    }
}
