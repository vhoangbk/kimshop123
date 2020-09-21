<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('promotion_id');
            $table->string('customer_id');
            $table->string('note')->nullable();
            $table->boolean('is_active')->default(0);
            /**
             * new: khach hang moi
             * calling: da goi nhung bat may
             * called: da bat may chua xac nhan
             * accepted: khach hang dong y
             * rejected: khach hang huy don hang
             */
            $table->integer('status')->default(0)->comment('1: New, 2: Calling, 3: Called, 4: Rejected, 5: Accepted, 6: packed, 7: shipping, 8: return, 9: win')->default(0);
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
        Schema::dropIfExists('promotion_customers');
    }
}
