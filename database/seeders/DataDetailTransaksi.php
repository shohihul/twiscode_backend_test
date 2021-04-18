<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class DataDetailTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_transactions')->insert([
            'id_transaction' => 1,
            'harga' => 5000,
            'jumlah' => 2,
            'subtotal' => 10000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detail_transactions')->insert([
            'id_transaction' => 1,
            'harga' => 10000,
            'jumlah' => 1,
            'subtotal' => 10000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detail_transactions')->insert([
            'id_transaction' => 2,
            'harga' => 10000,
            'jumlah' => 1,
            'subtotal' => 10000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detail_transactions')->insert([
            'id_transaction' => 2,
            'harga' => 5000,
            'jumlah' => 1,
            'subtotal' => 5000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detail_transactions')->insert([
            'id_transaction' => 2,
            'harga' => 5000,
            'jumlah' => 1,
            'subtotal' => 5000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detail_transactions')->insert([
            'id_transaction' => 2,
            'harga' => 5000,
            'jumlah' => 1,
            'subtotal' => 5000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
