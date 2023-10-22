<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlaceDetailsController extends Controller
{
    public function index()
    {
        $SellHistory = array(
            ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            [90, 55, 80, 25, 65, 40, 95],
            [85, 80, 50, 75, 45, 55, 80]
        );
        $MarketVisitor = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15'],
            [50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );

        return view('MarketPlaceDetails',['SellHistory'=>$SellHistory,'MarketVisitor'=>$MarketVisitor]);
    }
}
