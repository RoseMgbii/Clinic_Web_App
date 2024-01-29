<?php

namespace App\Http\Controllers;

use App\Jobs\AddOneJob;
use Illuminate\Http\Request;

class AddOneJobController extends Controller
{
    public function index(){
        AddOneJob::dispatch(true);
        return response()->json(['message', 'Queue Job completed']);
    }
}
