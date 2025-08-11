<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('researches', function (Blueprint $table) {
        // Standard documents
        $table->string('imrad_link')->nullable();
        $table->string('moa_link')->nullable();
        $table->string('mou_link')->nullable();

        // Yearly (Y1, Y2, Y3) Quarterly links
        foreach (['year1', 'year2', 'year3'] as $year) {
            for ($i = 1; $i <= 4; $i++) {
                $table->string("{$year}_q{$i}_link")->nullable();
            }
        }
    });
}

public function down()
{
    Schema::table('researches', function (Blueprint $table) {
        $table->dropColumn([
            'imrad_link', 'moa_link', 'mou_link',
            'year1_q1_link', 'year1_q2_link', 'year1_q3_link', 'year1_q4_link',
            'year2_q1_link', 'year2_q2_link', 'year2_q3_link', 'year2_q4_link',
            'year3_q1_link', 'year3_q2_link', 'year3_q3_link', 'year3_q4_link',
        ]);
    });
}

};
