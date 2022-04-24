<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Pricelist extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'symbol',
        'current_price'
    ];


    public function scopeIndexPricelist($query){
        $response = Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=10&page=1&sparkline=false&price_change_percentage=15s');
         return $response->json();
    }

    public function store($pricelist){
        $price_old = DB::table('pricelists')->select()->get();
        foreach ($pricelist as $p){
            $prices[] = (array)($p);
        }
        if(empty($price_old)){
            foreach ($prices as $price){
                Pricelist::create([
                    'name'=>$price["name"],
                    'symbol'=>$price["symbol"],
                    'current_price' =>$price["current_price"]
                ]);
            }
        }else{
            foreach ($prices as $price){
                Pricelist::update([
                    'current_price' =>$price["current_price"]
                ]);
            }
        }
    }
}
