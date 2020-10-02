<?php

namespace App\Http\Controllers\Account;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        if($user) {

            $items = $user->accounts;

            return view('bank.accounts.index', compact('items'));
        }else{
            $items = Account::all();

            return view('welcome',compact('items'));
        }


    }

    public function create()
    {
        $item = new Account();

        return view('bank.accounts.create', compact('item'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        $item = Account::create($data);

        if ($item) {
            return redirect()->route('bank.accounts.index', [$item->id])
                ->with('Ваш рахунок успішно створено');
        } else {
            return back()->withErrors('Помилка створення')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $item = Account::findorFail($id);
        $accountList = Account::all();

        return view('bank.accounts.edit',
            compact('item', 'accountList'));
    }

    public function update(Request $request, $id)
    {
        $item = Account::find($id);
        if ($item) {
            $data = $request->all();
            $item->update($data);

            return redirect()
                ->route('bank.accounts.edit', $item->id)
                ->with(['success' => 'Успішно збережено']);
        }
    }

    public function destroy($id)
    {
        $result = Account::destroy($id);

        if ($result) {
            return redirect()
                ->route('bank.accounts.index')
                ->with(['success' => "Рахунок номер[$id] видалений"]);
        } else {
            return back()->withErrors(['msg' => 'Помилка видалення']);
        }
    }
    public function showAllAccounts()
    {
        $items = Account::all();

        return view('welcome',compact('items'));
    }
}
