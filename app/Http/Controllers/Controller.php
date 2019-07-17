<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;
use App\Exports\UsersExport;

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

        Log::info( request()->file( 'file' ) );

        Excel::import( new UsersImport, request()->file( 'file' ) );

        return redirect( '/' );
    }

    public function export()
    {
        return Excel::download( new UsersExport, 'allusers.xlsx' );
    }
}
