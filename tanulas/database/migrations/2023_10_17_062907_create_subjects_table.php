<?php

use App\Models\Subjects;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
        });

        Subjects::create(
            [
                'name' => 'matek',
                'description' => 'számolni kell.',
                'limit' => 8
            ]
        );
        Subjects::create(
            [
                'name' => 'nyelvtan',
                'description' => 'A nyelv használat szabályait kell tudni',
                'limit' => 4
            ]
        );
        Subjects::create(
            [
                'name' => 'történelem',
                'description' => 'Az emberiség történetét ismerjük meg.',
                'limit' => 5
            ]
        );

    }
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
