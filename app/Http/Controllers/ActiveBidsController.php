<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveBidsController extends Controller
{
    public function index()
    {
        $AllBids = array(
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
        );
        $AllNFTSUpdate = array(
            ['assets/img/nft-table-img3.png','Mullican Computer Joy',' Xoeyam','7473 ',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img2.png','Mullican Computer Joy',' Twillor swift','7473 ',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img3.png','View Card by Jeff Davis',' Mr Bradman','7473 ',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img2.png','Mullican Computer Joy',' John wick','7473 ',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1]
        );
        $AllNFTSUpdateV2 = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img2.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img3.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
        );

        $AllNFTSUpdateV3 = array(
            ['assets/img/nft-table-img3.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['assets/img/nft-table-img2.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
        );
        $ActiveBids = array(
            'bids_image' => 'assets/img/active-bids-img.png',
            'name' => 'Lock and Lob x Fiesta Spurs',
            'id'=>2320382,
            'user_image' => 'assets/img/profile-pic-2.png',
            'user'=>'fornisseur1',
            'user_name'=>'forni@1',
            'current_bids' => 75320,
            'usd_rate' => 773.69,
            'count_down_from' => '2023/12/26'
        );
        $Artworks = array(
            'artworkNo' => 43,
            'activeArtwirk' => 40,
            'current_bids' => 30,
            'close_artwork' => 3
        );
        return view('ActiveBids',['AllNFTSUpdateV2'=>$AllNFTSUpdateV2,'AllNFTSUpdateV3'=>$AllNFTSUpdateV3,'AllBids'=>$AllBids,'AllNFTSUpdate'=>$AllNFTSUpdate,'ActiveBids'=>$ActiveBids,'Artworks'=>$Artworks]);
    }
}
