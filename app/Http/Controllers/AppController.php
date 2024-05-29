<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AppController extends Controller
{
    public function index()
    {
        return response()->view('welcome', [
            'users' => User::all()
        ]);
    }

    public function importExcel(Request $request)
    {
        Excel::import(new UserImport, $request->file('file'));
        return redirect('/');
    }
}
