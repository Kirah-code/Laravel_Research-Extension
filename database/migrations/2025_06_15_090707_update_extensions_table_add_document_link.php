<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateExtensionsTableAddDocumentLink extends Migration
{
    public function up()
    {
        Schema::table('extensions', function (Blueprint $table) {
            $table->dropColumn([
                'terminal_report',
                'photos_activity',
                'attendance_sheet',
                'evaluation',
                'moa',
                'moo',
            ]);
            $table->string('document_link')->nullable();
        });
    }

    public function down()
    {
        Schema::table('extensions', function (Blueprint $table) {
            $table->dropColumn('document_link');
            $table->string('terminal_report')->nullable();
            $table->string('photos_activity')->nullable();
            $table->string('attendance_sheet')->nullable();
            $table->string('evaluation')->nullable();
            $table->string('moa')->nullable();
            $table->string('moo')->nullable();
        });
    }
}
