<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
    public function index()
    {
        $Explore = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-1.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-6.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-7.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
        );

        $FeaturedArtist = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-6.png','Interconnected Planes','assets/img/eth-icon.png',75320]
        );
        $OpenMarket = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-7.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-6.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-7.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320]
        );
        $PartnerShops = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320]
        );
        $GameAssets = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-7.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320]
        );
        return view('MarketPlace',['Explore'=>$Explore,'FeaturedArtist'=>$FeaturedArtist,'OpenMarket'=>$OpenMarket,'PartnerShops'=>$PartnerShops,'GameAssets'=>$GameAssets]);
    }
}
