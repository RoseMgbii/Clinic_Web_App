<?php

namespace App\Http\Controllers;

use App\Models\People;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        //all People created before 2023-12-31
        $end_date = Carbon::create(2023, 12, 31);
        $gottenRecords = People::all()->where('created_at', '<=', $end_date);

        $gottenRecords = nl2br($gottenRecords);
        return response()->json($gottenRecords);
    }

    public function show() {
        //all people created on a specific date (2023-05-10)
        $onSept = People::all()->where('created_at', '=',Carbon::create(2023, 05, 10));
        return nl2br($onSept);
    }

    public function betweene(){
        //get people between a particular time
    }
}
