<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct() {
    }

    public function index() {
        return view('frontend.home');
    }

    public function news() {
        return view('frontend.news');
    }

    public function get_news() {
        if(request("url") == null) return json_encode(array('errors' => 'Parameter Error'));

        $url = request("url");

        $param = array(
            "token" => env('CRYPTO_API_TOKEN'),
            "source" => "Bitcoin/samp>,Bloomberg+Markets+and+Finance,Bloomberg+Technology,Coindesk,CoinMarketCap,CryptoNinjas,CryptoTicker,Decrypt,Forbes,Fox+Business,NewsBTC,Reuters,The+Daily+Hodl,Yahoo+Finance",
            "type" => "article",
            "topicOR" => "Digital+Dollar,Digital+Euro,Futures,Mining,Stablecoins,Tanalysis,Taxes,Upgrade,Whales",
            "sortby" => "rank",
            "items" => "5",
            "page" => 1
        );

        if(request("page") != NULL) $param["page"] = request("page");
        if(request("date") != NULL) $param["date"] = request("date");
        if(request("topicOR") != NULL) $param["topicOR"] = request("topicOR");
        if(request("search") != NULL) $param["search"] = request("search");
        if(request("sentiment") != NULL) $param["sentiment"] = request("sentiment");

        foreach($param as $key => $value) $url .= "&" . $key . "=" . $value;

        return $url;
        $result = file_get_contents($url);
        return $result;
    }

    public function mining() {
        return view('frontend.mining');
    }

    public function shop() {
        return view('frontend.shop');
    }

    public function exchange() {
        return view('frontend.exchange');
    }

    public function wallet() {
        return view('frontend.wallet');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
