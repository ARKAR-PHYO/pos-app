<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemaneEverlisttypenamesOnEverlisttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('everlisttypes', function (Blueprint $table) {
            $table->renameColumn('everlisttype', 'everlisttypenames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('everlisttypes', function (Blueprint $table) {
            $table->renameColumn('everlisttypenames', 'everlisttype');
        });
    }
}
