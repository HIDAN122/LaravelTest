<?php

namespace App\Http\Controllers\Account;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
  public function index()
  {
      $items = Transaction::all();

      return view('bank.accounts.transactions.index',compact('items'));
  }

  public function create()
  {
      $item = new Transaction();

      return view('bank.accounts.transactions.create',compact('item'));


  }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
  {
      $data = $request->all();

      $item = Transaction::create($data);

      if($item){
          return redirect()->route('bank.accounts.transaction.index', [$item->id])
              ->with('Ваша транзакція успішно створена');
      }else{
          return back()->withErrors('Помилка створення')
              ->withInput();
      }
  }
}
