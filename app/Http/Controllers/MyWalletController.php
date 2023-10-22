<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyWalletController extends Controller
{
    public function index()
    {
        $CurrencyStatistics = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [10, 20, 15, 35, 20, 55, 30, 60, 40, 75, 50, 80, 90, 100],
            [15, 25, 20, 30, 25, 60, 36, 65, 45, 70, 55, 85, 65, 95],
            [25, 40, 30, 40, 30, 80, 45, 65, 45, 70, 55, 50, 55, 95]
        );
        $CurrencyStatistics_monthly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22', 'Jan 23', 'Jan 24', 'Jan 25', 'Jan 26', 'Jan 27', 'Jan 28', 'Jan 29', 'Jan 30'],
            [10, 20, 15, 35, 20, 55, 30, 60, 40, 30, 35, 40, 45, 50, 55, 50, 60, 65, 60, 65, 50, 60, 70, 75, 80, 85, 90, 100],
            [15, 25, 20, 30, 25, 60, 36, 40, 45, 70, 60, 50, 55, 45, 50, 55, 60, 61, 55, 60, 66, 70, 75, 70, 75, 80, 75, 95],
            [25, 40, 30, 40, 30, 80, 45, 35, 41, 50, 55, 51, 57, 55, 59, 64, 67, 70, 75, 80, 65, 70, 71, 75, 70, 80, 85, 90]
        );
        $CurrencyStatistics_weekly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7'],
            [10, 20, 15, 35, 20, 55, 30],
            [15, 25, 20, 30, 25, 60, 36],
            [25, 40, 30, 40, 30, 80, 45]
        );
        $Investment15Days = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10', 'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'],
            [20, 90, 5, 85, 5, 80, 5, 90, 5, 90,5, 80, 5, 70, 10, 80]
        );
        $Investment = array(
            ['Jan', 'Feb', 'Mar', 'Afril', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
            [20, 90, 5, 85, 5, 80, 5, 90, 5, 90,5, 80, 5]
        );
        $MyWellat = array(
            ['assets/img/wallet-1.png','MetaMask',734.79,324.75],
            ['assets/img/wallet-2.png','Coinbase Wallet',299.61,324.75],
            ['assets/img/wallet-3.png','Bitski',512.44,324.75],
            ['assets/img/wallet-4.png','WalletConnect',992.99,324.75]
        );
        $RecentTransaction = array(
            ['assets/img/eth-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/btc-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/lite-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/eth-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75]
        );
        $RecentTransactionSend = array(
            ['assets/img/btc-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/btc-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/lite-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/eth-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75]
        );
        $RecentTransactionRecent = array(
            ['assets/img/lite-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/btc-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/lite-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75],
            ['assets/img/eth-icon.png','Add ETH from MetaMask','22 hours ago',734.79,324.75]
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
        return view('MyWallet',['Investment15Days'=>$Investment15Days,'RecentTransactionRecent'=>$RecentTransactionRecent,'RecentTransactionSend'=>$RecentTransactionSend,'CurrencyStatistics'=>$CurrencyStatistics,'CurrencyStatistics_monthly'=>$CurrencyStatistics_monthly,'Investment'=>$Investment,'MyWellat'=>$MyWellat,'RecentTransaction'=>$RecentTransaction,'wellateStatistic'=>$wellateStatistic,'CurrencyStatistics_weekly'=>$CurrencyStatistics_weekly]);
    }
}
