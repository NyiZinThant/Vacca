<?php

namespace App\Http\Controllers;

use App\Models\VaccineForm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $vaccData = [
            count(VaccineForm::where("vaccine_id", "1")->get()),
            count(VaccineForm::where("vaccine_id", "2")->get()),
            count(VaccineForm::where("vaccine_id", "3")->get()),
        ];
        $ageData = [
            count(VaccineForm::where("age", "<", 37)->get()),
            count(VaccineForm::whereBetween('age', [36, 64])->get()),
            count(VaccineForm::where("age", ">", 63)->get()),
        ];
        $latest = VaccineForm::where("created_at",'<', date('Y-m-d'))->orderBy('created_at', 'DESC')
        ->limit(5)
        ->get();
        return view('admin.dashboard', ["vaccData"=>$vaccData, "ageData"=>$ageData, "latest"=>$latest]);
    }
    public function show()
    {
        $data = VaccineForm::latest()->paginate(9);
        return view("admin.data", ["data"=>$data]);
    }
    public function search(Request $request)
    {
        $data = VaccineForm::query()->where('name', 'LIKE', "%{$request->search}%")
        ->orWhere('email', 'LIKE', "%{$request->search}%")->latest()->paginate(9);
        return view("admin.data", ["data"=>$data]);
    }
}
