<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $AllNFTSUpdate = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' user1','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1]
        );

        $AllNFTSUpdateV2 = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
        );

        $AllNFTSUpdateV3 = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
        );

        $TopSeller = array(
            ['assets/img/verfify-sign.png','assets/img/seller-1.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',8435],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',7435],
            ['assets/img/verfify-sign.png','assets/img/seller-3.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',5435],
            ['assets/img/verfify-sign.png','assets/img/seller-4.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',3435],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',5735],
            ['assets/img/verfify-sign.png','assets/img/seller-4.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',3935],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',3335],
            ['assets/img/verfify-sign.png','assets/img/seller-3.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',3435],
            ['assets/img/verfify-sign.png','assets/img/seller-1.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',7435],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',3435]
            
        );

        $TopBuyer = array(
            ['assets/img/verfify-sign.png','assets/img/seller-4.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',78],
            ['assets/img/verfify-sign.png','assets/img/seller-1.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',80],
            ['assets/img/verfify-sign.png','assets/img/seller-3.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',81],
            ['assets/img/verfify-sign.png','assets/img/seller-4.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',74],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',71],
            ['assets/img/verfify-sign.png','assets/img/seller-1.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',65],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',49],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',39],
            ['assets/img/verfify-sign.png','assets/img/seller-1.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',35],
            ['assets/img/verfify-sign.png','assets/img/seller-2.png','Brokln Simons','@broklinslam_75','assets/img/diamond-icon.png',35]
            
        );

        $SellHistory = array(
            ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            [90, 55, 80, 25, 65, 40, 95],
            [85, 80, 50, 75, 45, 55, 80]
        );
        $MarketVisitor = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15'],
            [50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );
        $MarketVisitorWeekly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7'],
            [50, 20, 45, 15, 55, 20,60]
        );
        $MarketVisitorMonthly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22','Jan 23','Jan 24','Jan 25','Jan 26','Jan 27','Jan 28','Jan 29','Jan 30'],
            [10, 20, 35, 15, 55, 20,60, 20,70,45,64,20,72,22,66,50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );

        $sliderBanner = array(
            'assets/img/dashboard-slider-1.png','assets/img/slide_2.jpg','assets/img/slide_3.jpg','assets/img/slide_2.jpg'
        );

        $TrendingAction = array(
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','bt ahmed','De mais ',2320,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','bj anis','Blé',2645,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','kn achref','de l\'avoine',987,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','as rayen','De l\'orge',1400,'@broklinslam_75',75320,773.69,'2023/12/26'],
        );
        $CurrentBid = array(
            'name' => 'Meilleur fournisseur au taux d\'achat',
            'image' => 'assets/img/profile-pic-2.png',
            'id' => 0113,
            'user' => 'User3',
            'user_name' => 'User@3',
            'bids' => 753.20,
            'usd' => 773.69,
            'count_down_from' => '2023/12/26'
        );


       //dd($sliderBanner);

        return view('Dashboard',['AllNFTSUpdate'=>$AllNFTSUpdate,'AllNFTSUpdateV2'=>$AllNFTSUpdateV2,'AllNFTSUpdateV3'=>$AllNFTSUpdateV3,'TopSeller'=>$TopSeller,'TopBuyer'=>$TopBuyer,'SellHistory'=>$SellHistory,'MarketVisitor'=>$MarketVisitor,'sliderBanner'=>$sliderBanner,'TrendingAction'=>$TrendingAction,'CurrentBid'=>$CurrentBid,'MarketVisitorMonthly'=>$MarketVisitorMonthly,'MarketVisitorWeekly'=>$MarketVisitorWeekly]);
    }
}
