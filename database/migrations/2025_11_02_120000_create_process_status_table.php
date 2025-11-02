<?php

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
        Schema::create('process_status', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('inactive'); // inactive, nominating, choosing, voting, completed
            $table->timestamp('nomination_starts_at')->nullable();
            $table->timestamp('nomination_ends_at')->nullable();
            $table->timestamp('choosing_ends_at')->nullable();
            $table->timestamp('voting_ends_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_status');
    }
};
