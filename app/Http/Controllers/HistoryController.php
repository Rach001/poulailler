<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
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
        $MarketVisitor_7days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7'],
            [50, 20, 45, 15, 55, 20,60]
        );
        $MarketVisitor_30days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 28', 'Jan 29', 'Jan 30'],
            [50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66,50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );
        $MarketHistory = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [10, 20, 15, 35, 20, 55, 30, 60, 40, 60, 60, 55, 70, 40],
            [15, 25, 20, 30, 25, 60, 36, 65, 60, 70, 55, 40, 50, 60]
        );
        $MarketHistory = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [10, 20, 15, 35, 20, 55, 30, 60, 40, 60, 60, 55, 70, 40],
            [15, 25, 20, 30, 25, 60, 36, 65, 60, 70, 55, 40, 50, 60]
        );
        $MarketHistory_30days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 28', 'Jan 29', 'Jan 30'],
            [10, 20, 15, 35, 20, 55, 30, 60, 40, 60, 60, 55, 70, 40,30, 20, 25, 35, 20, 55, 30, 60, 40, 60, 60, 55, 70, 40],
            [15, 25, 20, 30, 25, 60, 36, 65, 60, 70, 55, 40, 50, 60,45, 25, 20, 30, 25, 60, 36, 65, 60, 70, 55, 40, 50, 60]
        );
        $MarketHistory_7days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7'],
            [10, 20, 15, 35, 20, 55, 30, 60],
            [15, 25, 20, 30, 25, 60, 36, 65]
        );

        $AllNFTSUpdate = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' John wick','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1]
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

        $HistoryData = array(
            'Total_sell' => 80,
            'Active_Customer' => 7583,
            'Total_product' => 6753,
            'CloseOffer' => 745
            );
        $Total_sell = array(
            ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            [25, 30, 35, 25, 25]
        );  
        $ActiveCustomer = array(
            ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            [25, 30, 35, 25, 25]
        ); 
        $Total_Prodcuts = array(
            ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            [25, 30, 35, 25, 25]
        );  
        $Close_Offer = array(
            ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            [25, 30, 35, 25, 25]
        );  
       // dd($HistoryData['Total_sell']);
        return view('History',['AllNFTSUpdateV2'=>$AllNFTSUpdateV2,'AllNFTSUpdateV3'=>$AllNFTSUpdateV3,'MarketHistory_30days'=>$MarketHistory_30days,'MarketHistory_7days'=>$MarketHistory_7days,'SellHistory'=>$SellHistory,'MarketVisitor_7days'=>$MarketVisitor_7days,'MarketVisitor_30days'=>$MarketVisitor_30days,'MarketVisitor'=>$MarketVisitor,'MarketHistory'=>$MarketHistory,'AllNFTSUpdate'=>$AllNFTSUpdate,'HistoryData'=>$HistoryData,'Total_sell'=>$Total_sell,'ActiveCustomer'=>$ActiveCustomer,'Total_Prodcuts'=>$Total_Prodcuts,'Close_Offer'=>$Close_Offer]);
    }
}
