<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Vaccine;
use App\Models\VaccineForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vaccines = Vaccine::all();
        return view('vaccination', compact("vaccines"));
    }

    public function submit(StoreFormRequest $request, VaccineForm $vaccineForm)
    {
        $vaccineForm->name = $request->name;
        $vaccineForm->email = $request->email;
        $vaccineForm->age = $request->age;
        $vaccineForm->address = $request->address;
        $vaccineForm->nrc = $request->nrc;
        $vaccineForm->vaccine_id = $request->vaccine_id;
        $vaccineForm->save();
        return redirect('info')->with("message", "Success! You have registered vaccination form.");
    }
}
