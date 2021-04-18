<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class DataTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'tanggal_order' => Carbon::now(),
            'status' => 'lunas',
            'tanggal_pembayaran' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'tanggal_order' => Carbon::now(),
            'status' => 'lunas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
