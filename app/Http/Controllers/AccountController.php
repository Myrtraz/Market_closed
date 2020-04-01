<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountDataRequest;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {
        $account = User::get()->first();
        return view('settings', compact('account'));
    }
    public function show($id)
    {
       $account = User::find($id);
        return view('settings',compact('account'));
    }

    public function update(AccountDataRequest $request, $id)
    {
        $edits = User::find($id);

        if (! is_null($edits)) {
            $edits->fill($request->all());
            $edits->save();
        }

        return redirect()->back();
    }

    public function updatePersonalData(UpdatePersonalDataRequest $request, $id)
    {
        $edits = User::find($id);

        if (! is_null($edits)) {
            $edits->fill($request->all());
            $edits->save();
        }

        return redirect()->back();
    }
}
