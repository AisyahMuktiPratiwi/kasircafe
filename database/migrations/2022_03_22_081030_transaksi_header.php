<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('tipe_pembayaran');
            $table->string('dibayar');
            //total semua harga
            $table->float('jumlah');
            $table->string('status');
            $table->string('qty');
            $table->string('product_id');
            $table->string('username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
