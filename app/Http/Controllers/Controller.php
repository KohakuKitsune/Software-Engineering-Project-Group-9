<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\carbon;

use App\Http\Controllers\DataController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function home()
    {
        return view('frontend/index');
    }

    function about()
    {
        return view('frontend/about');
    }

    function analysis()
    {
        $dataController = new DataController;
        $cityList = $dataController->listCity();
        $yearList = $dataController->listYear();
        $ryearList = $dataController->rlistYear();
        return view('frontend/analysis',['cityList'=>$cityList,'yearList'=>$yearList,'ryearList'=>$ryearList]);
    }

    function time()
    {
        $dataController = new DataController;
        $cityList = $dataController->listCity();
        $yearList = $dataController->listYear();
        $ryearList = $dataController->rlistYear();
        return view('frontend/time',['cityList'=>$cityList,'yearList'=>$yearList,'ryearList'=>$ryearList]);
    }
}
