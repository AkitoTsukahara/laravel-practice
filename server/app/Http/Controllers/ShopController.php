<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    //
    public function index(){
        $area_tokyo = Area::find(1)->shops;

        $name = Shop::find(3)->area->name;

        dd($area_tokyo,$name);
    }
}
