<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $TopCreators = array(
            ['assets/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['assets/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['assets/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['assets/img/creator-4.png','Albert Flores','broklinslam_72']
        );
        $TopCreatorsWeekly = array(
            ['assets/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['assets/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['assets/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['assets/img/creator-4.png','Albert Flores','broklinslam_72'],
            ['assets/img/creator-1.png','Albert Flores','broklinslam_72']
        );
        $TopCreatorsMonthly = array(
            ['assets/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['assets/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['assets/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['assets/img/creator-4.png','Albert Flores','broklinslam_72'],
            ['assets/img/creator-1.png','Albert Flores','broklinslam_72'],
            ['assets/img/creator-2.png','Albert Flores','broklinslam_72']
        );

        $TopPlatform = array(
            ['assets/img/platform-1.png','OpenSea'],
            ['assets/img/platform-2.png','Rarible'],
            ['assets/img/platform-3.png','Myth'],
            ['assets/img/platform-4.png','KnownOrigin']

        );
        $User_info_for_header = array(
            'name' => 'User1',
            'user_name' => 'User@1',
            'image' => 'assets/img/profile-pic.png',
            'balance' => 234435.94,
        );

        $Statistics = array(
            'TotalSold' => 140,
            'TotalCancel' => 12,
            'TotalPanding' => 60
        );

        $Statistics_weekly = array(
            'TotalSold' => 340,
            'TotalCancel' => 52,
            'TotalPanding' => 90
        );

        $Statistics_monthly = array(
            'TotalSold' => 640,
            'TotalCancel' => 152,
            'TotalPanding' => 290
        );

        $RecentNotification = array(
            ['assets/img/notify-1.png','Your Account has been created','successfully done','2 min ago'],
            ['assets/img/notify-2.png','Thank you !','you made your frast sell','2 min ago'],
            ['assets/img/notify-3.png','Broklan Simons','Start Following you','5 hours ago'],
            ['assets/img/notify-4.png','Thank you !','you made your frast sell','6 day ago'],
            ['assets/img/notify-2.png','Your Account has been created','successfully done','7 min ago']
        );
        $Balance = array(
            ['assets/img/wallet-1.png','MetaMask',75320,773.69],
            ['assets/img/wallet-2.png','Coinbase Wallet',75320,773.69],
            ['assets/img/wallet-3.png','Bitski',75320,773.69],
            ['assets/img/wallet-4.png','WalletConnect',75320,773.69]
        );
        $Addmoney = array(
            ['assets/img/wallet-1.png','MetaMask',1],
            ['assets/img/wallet-2.png','Coinbase Wallet',0],
            ['assets/img/wallet-3.png','Bitski',1],
            ['assets/img/wallet-4.png','WalletConnect',0]
        );

        $transectionRate = array(
            ['12:00 AM', '04:00 AM', '08:00 AM'],
            [40, 90, 10]
        );
        $transectionRateData = array(
            'usd' => 7473.67,
            'growth' => 324.75,
            'growth_percentage' => 11.5 
        );
        $transectionRateBTCData = array(
            'usd' => 5473.67,
            'growth' => 224.75,
            'growth_percentage' => 10.0 
        );
        $transectionRateBTC = array(
            ['12:00 AM', '04:00 AM', '08:00 AM'],
            [30, 80, 20]
        );

        $SidebarInf = array(
            'active_bids' => 19,
            'market_place' => 9,
            'sell' => 4,
            'saved' => 32,
            'message' => 19
        );

        View::share(['transectionRateData'=>$transectionRateData,'transectionRateBTCData'=>$transectionRateBTCData,'transectionRateBTC'=>$transectionRateBTC,'TopCreators'=>$TopCreators,'TopCreatorsWeekly'=>$TopCreatorsWeekly,'TopPlatform'=>$TopPlatform,'User_info_for_header'=>$User_info_for_header,'Statistics'=>$Statistics,'RecentNotification'=>$RecentNotification,'Balance'=>$Balance,'Addmoney'=>$Addmoney,'TopCreatorsMonthly'=>$TopCreatorsMonthly,'transectionRate'=>$transectionRate,'SidebarInf'=>$SidebarInf,'Statistics_weekly'=>$Statistics_weekly,'Statistics_monthly'=>$Statistics_monthly]);
    }
}
