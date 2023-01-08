<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Consumption;
use App\Models\Population;

class DataController extends Controller
{
    function listCity()  //retrives all entries from database in table City.
    {
        return City::all();
    }

    function listYear()  //retrieve all unique date entries from database.(Ascending order)
    {
        return Population::selectRaw('YEAR(year) AS year')->distinct()->orderBy('year','asc')->get();
    }

    function rlistYear()  //retrieve all unique date entries from database.(Descending order)
    {
        return Population::selectRaw('YEAR(year) AS year')->distinct()->orderBy('year','desc')->get();
    }

}
