<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            0 => ["A", 1, "a", 5],
            1 => ["B", 1, "b", 6],
            2 => ["C", 10, "c", 7],
        ];
        foreach ($items as $i) {
            $item = new Item;
            $item->name = $i[0];
            $item->description = $i[2];
            $item->stock = $i[1];
            $item->sell = $i[3];
            $item->save();
        }
    }
}
