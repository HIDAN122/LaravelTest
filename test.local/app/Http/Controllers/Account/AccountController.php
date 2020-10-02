<?php

namespace App\Http\Controllers\Account;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $items = $user->accounts;

        return view('bank.accounts.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Account();

        return view('bank.accounts.edit', compact('item'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $item = Account::create($data);

        if ($item) {
            return redirect()->route('bank.accounts.edit', [$item->id])
                ->with('Ваш рахунок успішно створено');
        } else {
            return back()->withErrors('Помилка створення')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Account::findorFail($id);
        $accountList = Account::all();

        return view('bank.accounts.edit',
            compact('item', 'accountList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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


}
