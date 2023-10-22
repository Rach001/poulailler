<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllSavedController extends Controller
{
    public function index()
    {
        $AllBids = array(
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69]
        );


        return view('AllSaved',['AllBids'=>$AllBids]);
    }
}
