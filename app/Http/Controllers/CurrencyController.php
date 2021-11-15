<?php

namespace App\Http\Controllers;

use Exception;
use Facades\App\Helpers\Json;
use App\Models\Currency;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function showCurrency(){

        try{
        // Get JSON from NBP Api Table-A
        $response = Http::acceptJson()->get('http://api.nbp.pl/api/exchangerates/tables/A');

        // Update or Create Currency
        foreach ($response[0]['rates'] as $rate){

            $currency = Currency::updateOrCreate([

                'name' => $rate['currency'],
                'currency_code' => $rate['code'],
                'exchange_rate' => $rate['mid']
            ]);

            $currency->save();
        }
            // Get Currencies from DB
            $currencies = Currency::select('id','name', 'currency_code', 'exchange_rate')->get();

            $result = compact('currencies');
            Json::dump($result);
            return view('currency', $result);

        } catch (\Exception $e) {

            // Return status 500
            return response()->json([
                'message' => "Something went wrong!"
            ],500);
        }
    }
}
