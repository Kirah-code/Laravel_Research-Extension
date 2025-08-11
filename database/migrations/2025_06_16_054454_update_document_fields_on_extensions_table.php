<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDocumentFieldsOnExtensionsTable extends Migration
{
    public function up()
    {
        Schema::table('extensions', function (Blueprint $table) {
            $table->dropColumn('document_link');

            $table->string('terminal_report')->nullable();
            $table->string('moa')->nullable();
            $table->string('mou')->nullable();
        });
    }

    public function down()
    {
        Schema::table('extensions', function (Blueprint $table) {
            $table->dropColumn(['terminal_report', 'moa', 'mou']);
            $table->string('document_link')->nullable();
        });
    }
}
