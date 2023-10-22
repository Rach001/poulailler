<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index()
    {
        $BitsThisMonth = array(
            ['Jan', 'Feb', 'Mar', 'Afril', 'May'],
            [0,85, 75, 62, 58, 67, 81,70, 66, 55]
        );
       $SellEaringThisMonth= array(
            ['Jan', 'Feb', 'Mar', 'Afril', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
            [0,85, 75, 62, 58, 67, 81,70, 66, 55,80, 70, 64]
        );
        $CurrencyStatistics = array(
            ['Jan', 'Feb', 'Mar', 'Afril', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
            [0,85, 75, 62, 58, 67, 81,70, 66, 55,80, 70, 64]

        );
        $CurrencyStatistics_15days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [20,85, 75, 62, 58, 67, 81,70, 66, 55,80, 70, 64, 70, 50, 40]

        );
        $CurrencyStatistics_30days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 8', 'Jan 29'],
            [20,85, 75, 62, 58, 67, 81,70, 66, 55,80, 70, 64, 70, 50, 40, 50, 85, 75, 62, 58, 67, 81,70, 66, 55,80, 70, 64, 70, 50, 40]

        );
        $SellHistory = array(
            ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            [90, 55, 80, 25, 65, 40, 95],
            [85, 80, 50, 75, 45, 55, 80]
        );
        $SellHistory_15days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [90, 55, 80, 25, 65, 40, 95,90, 55, 80, 25, 65, 40, 95,76],
            [85, 80, 50, 75, 45, 55, 80,90, 55, 82, 25, 63, 44, 96,33]
        );
        $SellHistory_30days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 28', 'Jan 29'],
            [90, 55, 80, 25, 65, 40, 95,90, 55, 80, 25, 65, 40, 95,76,90, 55, 80, 25, 65, 40, 95,90, 55, 80, 25, 65, 40, 95,76],
            [85, 80, 50, 75, 45, 55, 80,90, 55, 82, 25, 63, 44, 96,33,85, 80, 50, 75, 45, 55, 80,90, 55, 82, 25, 63, 44, 96,33]
        );
        $productHistory = array(
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323]
            
        );
        $productHistoryV2 = array(
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323]
        );
        $productHistoryV3 = array(
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323],
            ['2 Hours 1 min 30s','assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam',1,343,1.323,1.323]
        );

        $wellateStatistic = array(
            'No_of_wallate' => 4,
            'Total_transection' => 6572.00,
            'current_balance' => 94734.00,
            'growth' => 324.75,
            'growth_percentage' => 11.5,
            'ETH' => 2.32,
            'ETH_percentage' => 90,
            'BTC' =>1.76,
            'BTC_percentage' => 48,
            'LTC'=> 2.32,
            'LTC_percentage' => 81
        );
        $TopSellCountry = array(
            ['assets/img/flag-1.png','Netherlands','3.435'],
            ['assets/img/flag-2.png','United States','2.765'],
            ['assets/img/flag-3.png','Germany','1.475']
        );
        $TopSellCountryMonthly = array(
            ['assets/img/flag-1.png','Netherlands','3.435'],
            ['assets/img/flag-2.png','United States','2.765'],
            ['assets/img/flag-3.png','Germany','1.475']
        );
        $TopSellCountryWeekly = array(
            ['assets/img/flag-1.png','Netherlands','3.435'],
            ['assets/img/flag-2.png','United States','2.765'],
            ['assets/img/flag-3.png','Germany','1.475'],
            ['assets/img/flag-3.png','Germany','1.475']
        );
        $BitsthisMonthData = array(
            'ETH' =>769.44,
            'usd' =>949374.94,
            'growth' =>'-224.75',
            'growth_percentage' => 11.5

        );
        $SellEaringthisMonth = array(
            'ETH' =>542.44,
            'usd' =>949374.94,
            'growth' => '+324.75',
            'growth_percentage' => 11.5

        );

        return view('Sell',['productHistoryV2'=>$productHistoryV2,'productHistoryV3'=>$productHistoryV3,'CurrencyStatistics_30days'=>$CurrencyStatistics_30days,'BitsthisMonthData'=>$BitsthisMonthData,'SellEaringthisMonth'=>$SellEaringthisMonth,'SellHistory_15days'=>$SellHistory_15days,'SellHistory_30days'=>$SellHistory_30days,'CurrencyStatistics_15days'=>$CurrencyStatistics_15days,'CurrencyStatistics'=>$CurrencyStatistics,'SellHistory'=>$SellHistory,'SellEaringThisMonth'=>$SellEaringThisMonth,'BitsThisMonth'=>$BitsThisMonth,'productHistory'=>$productHistory,'wellateStatistic'=>$wellateStatistic,'TopSellCountry'=>$TopSellCountry,'TopSellCountryMonthly'=>$TopSellCountryMonthly,'TopSellCountryWeekly'=>$TopSellCountryWeekly]);
    }
}
