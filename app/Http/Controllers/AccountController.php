<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AccountDataRequest;
use App\Http\Requests\AddressRequest;
use App\User;
use Auth;
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

    public function vendor()
    {
        //$account = User::find($id);
        return view('vendor',compact('account'));
    }




    public function Addresses() {
        $user = Auth::user();
        return view('addresses', compact('user'));
    }

    public function myAddresses(AddressRequest $request)
    {
        $user_id = Auth::user()->id;
        $state = $request->state;
        $city = $request->city;
        $career = $request->career;
        $streetNumber = $request->streetNumber;
        $street = $request->street;
        $additionalData = $request->additionalData;

        Address::where('user_id', $user_id)->update([
            'current' => false
        ]);

        $address = Address::create([
            'user_id' => $user_id,
            'state' => $state,
            'city' => $city,
            'career' => $career,
            'streetNumber' => $streetNumber,
            'street' => $street,
            'additionalData' => $additionalData,
            'current' =>true
        ]);

        return redirect()->route('products');
    }
}
