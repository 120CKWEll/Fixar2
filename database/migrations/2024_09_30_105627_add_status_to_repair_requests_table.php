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
        Schema::table('repair_requests', function (Blueprint $table) {
            $table->string('status')->default('pending'); // เพิ่มคอลัมน์ status พร้อมค่าเริ่มต้น
        });
    }

    public function down()
    {
        Schema::table('repair_requests', function (Blueprint $table) {
            $table->dropColumn('status'); // ลบคอลัมน์ status ถ้าต้องการย้อนกลับ
        });
    }
};