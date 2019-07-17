<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {

        $users = User::all();
        return view( 'welcome', compact( 'users' ) );
    }

    public function import()
    {

        Excel::import( new UsersImport, 'users.xlsx' );

        return redirect( '/' );
    }
}
