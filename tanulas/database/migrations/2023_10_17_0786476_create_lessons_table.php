<?php

use App\Models\Lessons;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lesson_id');
            $table->string('status');
            $table->foreignId('subject_id')->references('subject_id')->on('Subjects');
            $table->foreignId('user_id')->references('id')->on('Users');
            $table->timestamps();
        });

        Lessons::create(
            [
                'status' => 'jelen',
                'subject_id' => 2,
                'user_id' => 1
            ]
        );
        Lessons::create(
            [
                'status' => 'jelen',
                'subject_id' => 1,
                'user_id' => 1
            ]
        );
        Lessons::create(
            [
                'status' => 'nincs jelen',
                'subject_id' => 3,
                'user_id' => 2
            ]
        );
        
    }
 
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
