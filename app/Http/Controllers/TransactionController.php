<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Log;
use Exception;
use App\Models\Employee;

class TransactionController extends Controller
{
    // Get Employee List from Database
    // public function getEmployeeList(){
    //     try{
    //         $employees = Employee::orderBy('id', 'DESC')->get();
    //         return response()->json($employees);
    //     }catch(Exception $e){
    //         Log::error($e);
    //     }
    // }
    public function transaction(){
    //    if(!Session::get('login')){
    //     return redirect('/users');
    //    }else{
    //     $year = date('Y');
    //     $testing = DB::table('testing')->get();
        
    //       // $kpk = Session::get('kpk');
    //       // $cekUser = Account::where('user_position' , $grupID)->first();
    //       // $userStatus = DB::table('proddev.pd_grup')->where('grp_ID',$cekUser->grp_ID)->first();
          
    //     return view('Transaction.transactions' , compact('year','testing'));
    //    }
    $year = date('Y');
    $testing = DB::table('testing')->get();
    
      // $kpk = Session::get('kpk');
      // $cekUser = Account::where('user_position' , $grupID)->first();
      // $userStatus = DB::table('proddev.pd_grup')->where('grp_ID',$cekUser->grp_ID)->first();
      
    return view('Transaction.transactions' , compact('year','testing'));
    }
    public function newactivity(){
        $year = date('Y');
    
        // $kpk = Session::get('kpk');
        // $cekUser = Account::where('user_position' , $grupID)->first();
        // $userStatus = DB::table('proddev.pd_grup')->where('grp_ID',$cekUser->grp_ID)->first();
        
        return view('NewActivity' , compact('year'));
    }
}
