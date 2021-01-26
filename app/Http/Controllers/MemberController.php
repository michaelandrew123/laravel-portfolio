<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Company;
class MemberController extends Controller
{
    //
    public function index(){ 
        return Member::find(2)->getCompany; 
        // return "One to One relationship";
    }
}
