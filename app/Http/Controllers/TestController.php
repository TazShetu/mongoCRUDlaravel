<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\increment;

class TestController extends Controller
{

    public function test()
    {
        return view('test');
    }


    public function testStore(Request $request)
    {
        dd('posted');
    }


    public function testTransactions()
    {
        //***        DB::beginTransaction();
        //*** does not work with jenssegers driver
        //*** for raw php need replica server to Implement Transactions

        $u = User::find('610b796a135a0000ee001915');
        dd($u->id);

    }


    public function testOnDuplicate()
    {
        //*** to use updateOrCreate() all fields has to be fillable
//        protected $fillable = ['name', 'stock', 'description', 'sell']; in Item Model

        //***  on duplicate update but cannot increment own column *****
//        Item::updateOrCreate(
//            ['name' => 'D', 'description' => 'd'],
//            ['stock' => 10, 'sell' => -11]
//        );

        //* DB::raw is not supported in jenssegers driver

        //***** on duplicate increment own column (work around) #######

        $item = Item::firstOrCreate([
            'name' => 'D',
            'description' => 'd'
        ]);
        $item->stock = $item->stock - 1;
        $item->sell = $item->sell + 1;
        $item->update();



        dd('check');
    }

}
