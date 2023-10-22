<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $User_personal_Info = array(
            'cover_image' => 'assets/img/profile-cover.png',
            'profile_image' => 'assets/img/profile-thumb.png',
            'first_name' => 'User1',
            'last_name' => 'luser',
            'user_name' => 'user@1',
            'bio' => 'Autoglyphs are fitting the first “on-chain” to the find generative art on the Ethereum blockchain',
            'email' => 'mrjohnwick@gmail.com',
            'followers' => 100,
            'following' => 56,
            'favorite' => 940
        );
        $PaymentMethod = array(
            ['assets/img/payment-1.png','Datch Bangla Bank Lmd','Bank **********5535',1],
            ['assets/img/payment-2.png','Master Card','Bank **********5535',1],
            ['assets/img/payment-3.png','Paypal Account','Bank **********5535',0],
            ['assets/img/payment-4.png','Visa Card','Bank **********5535',1]
        );
        $LoginActivity = array(
            ['Windows','Google Chorom','Dhaka Bangladesh','2 days ago',1],
            ['Mac','Firefox','Dhaka Bangladesh','5 days ago',0],
            ['App','Facebook App','Dhaka Bangladesh','7 days ago',0],
            ['Mac','Google Chorom','Dhaka Bangladesh','21 days ago',1],
            ['Windows','Google Chorom','Dhaka Bangladesh','30 days ago',0]
        );

        $FAQ = array(
            ['Can I resell an NFT?','What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],
            
            ['What can you do with an NFT after buying it?', 'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],

            ['Can you lose money on NFT?','What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],

            ['How does NFT prove ownership?', 'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],

            ['How can you tell if someone owns an NFT?', 'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],

            ['Can you lose more than you invest in NFTs?', 'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],

            ['What can you do with an NFT after buying it?', 'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.']
        );

        $TermsAndCondition = array(
            [1,'Definitions',
            'What you do own when you buy an NFT are the keys to a non-fungible – perhaps unique – token. That token is yours to trade or hold or display in Decentraland. But the digital file associated with an NFT is just as easy to copy and paste and download as any other – the Finally, players lose their NFTs sometimes according to the rules and regulations of the NFT game.'],
            [2,'Acceptance','
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.Capacity. You confirm that you have the legal capacity to receive and hold and make use of the NFT under French jurisdiction and any other relevant jurisdiction.Acceptance. By participating in the Sale, You accept and agree to these Terms and Conditions without any condition or restriction.If You do not agree to this Contract, You shall not participate in the Sale made by the Company Exercitation veniam consequat sunt nostrud amet.Capacity. You confirm that you have the legal capacity to receive and hold find to end.Contract, You shall not participate in the Sale made by the Company Exercitation venia'],
            [3,'The Sale',
            'The Company offers NFTs featuring the Betonyou universe. The holders of one or more NFTs will be able to win cryptos while playing video games. In the future, the Company plans to develop its own games and Metaverse around the Betonyou universe (“Project”).
            
            To release the NFTs and fund the project, the Company offers NFTs from a dedicated website("Sale"). The web address of this website will be given at the time of the mint. The NFT acquisition does not confer any rights on the Company or in the future development'],

            [4,'Purchasers obligations',
            'To the fullest extent permitted by applicable law, You undertake to indemnify, defend and hold harmless the Company from and against all claims, demands, actions, damages, losses, costs and expenses (including attorneys fees) that arise from or relate to (i) your Subscription or use of the NFTs; (ii) your responsibilities or obligations under this Contract; and (iii) your breach of this Contract.
            
            Company undertakes to act with the care normally expected from a professional in his field and to comply with the best practice in force. The best endeavor obligation only binds the Company.']
        );



        return view('Setting',['User_personal_Info'=>$User_personal_Info,'PaymentMethod'=>$PaymentMethod,'LoginActivity'=>$LoginActivity,'FAQ'=>$FAQ,'TermsAndCondition'=>$TermsAndCondition]);
    }

    public function changePassword(Request $request)
    {
        if($request->old_password == 1234 && $request->new_password == $request->confirm_password){
            return redirect()->to('/my-profile');
        }
    }
}
