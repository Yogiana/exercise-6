<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elektroniks', function (Blueprint $table) {
            $table->unsignedBigInteger("elektronik_type_id")->default(1)->after("id");
            $table->foreign("elektronik_type_id")->references("id")->on("elektronik_types")->onDelete("restrict")->onUpdate("cascade");
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elektroniks', function (Blueprint $table) {
            $table->dropForeign("elektroniks_item_type_id_foreign");
            $table->dropColumn("elektronik_type_id");
            //
        });
    }
};
