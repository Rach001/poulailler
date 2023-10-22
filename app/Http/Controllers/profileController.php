<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $User = array(
            'cover_image' => 'assets/img/profile-cover.png',
            'profile_image' => 'assets/img/profile-thumb.png',
            'name' => "User1",
            'bio' => 'entrepreneur des poulailler depuis 2013',
            'followers' => 100,
            'following' => 56,
            'favorite' => 940
        );
        $OnSale = array(
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
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320]
        );
        $Owned = array(
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
        $collection = array(
            ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
            ['assets/img/col-4.png','assets/img/col-5.png','assets/img/col-6.png','assets/img/market-author-2.png','Photography',32],
            ['assets/img/col-7.png','assets/img/col-8.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
            ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-2.png','Photography',32],
            ['assets/img/col-4.png','assets/img/col-5.png','assets/img/col-6.png','assets/img/market-author-1.png','Photography',32],
            ['assets/img/col-7.png','assets/img/col-8.png','assets/img/col-9.png','assets/img/market-author-2.png','Photography',32],
            ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-2.png','Photography',32],
            ['assets/img/col-4.png','assets/img/col-5.png','assets/img/col-6.png','assets/img/market-author-2.png','Photography',32],
            ['assets/img/col-7.png','assets/img/col-8.png','assets/img/col-9.png','assets/img/market-author-1.png','Photography',32],
            ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-2.png','Photography',32],
        );

        $Created = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-2.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-7.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-9.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-2.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-1.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-2.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-6.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-8.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-1.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320],
        );
        $CreateforBits = array(
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-1.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-5.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-6.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
        );
        $CreateforSell = array(
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69]
        );
        $CreateforBitsHidden = array(

            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-1.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',0,'assets/img/marketplace-2.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-3.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['assets/img/market-author-1.png','Rrayak John','Yuaisn Kha','assets/img/market-author-2.png',1,'assets/img/marketplace-4.png','Interconnected Planes','assets/img/eth-icon.png',75320,4543.33,'2023/12/26']
        );
        $CreateforSellHidden = array(

            ['assets/img/trending-img-1.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-2.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-3.png','assets/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['assets/img/trending-img-4.png','assets/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69]

            

           
        );

        $Activity = array(
            ['assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['assets/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','assets/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],

        );

        return view('Profile',['User'=>$User,'Activity'=>$Activity,'collection'=>$collection,'OnSale'=>$OnSale,'Created'=>$Created,'CreateforBits'=>$CreateforBits,'CreateforSell'=>$CreateforSell,'Owned'=>$Owned,'CreateforBitsHidden'=>$CreateforBitsHidden,'CreateforSellHidden'=>$CreateforSellHidden]);
    }
}
