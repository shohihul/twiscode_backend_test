<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\DetailTransaction;

class TransactionController extends Controller
{
    public function get_transaction()
    {
        $tranactions = Transaction::select('id', 'tanggal_order', 'status', 'tanggal_pembayaran')->get();

        foreach ($tranactions as $tranaction) {
            $jumlah_barang = DetailTransaction::where('id_transaction', $tranaction->id)->count();
            $total = DetailTransaction::where('id_transaction', $tranaction->id)->sum('subtotal');
            $tranaction->jumlah_barang = $jumlah_barang;
            $tranaction->total = $total;
        }

        return response()->json($tranactions, 200);
    }
}
