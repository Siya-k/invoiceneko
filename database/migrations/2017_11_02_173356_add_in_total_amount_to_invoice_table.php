<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInTotalAmountToInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->double('total')->nullable()->after('duedate');
        });

        Schema::table('old_invoices', function (Blueprint $table) {
            $table->double('total')->nullable()->after('duedate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('total');
        });

        Schema::table('old_invoices', function (Blueprint $table) {
            $table->dropColumn('total');
        });
    }
}
