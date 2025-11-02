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
        Schema::table('nominations', function (Blueprint $table) {
            $table->timestamp('nomination_starts_at')->nullable();
            $table->timestamp('nomination_ends_at')->nullable();
            $table->timestamp('voting_starts_at')->nullable();
            $table->timestamp('voting_ends_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->dropColumn('nomination_starts_at');
            $table->dropColumn('nomination_ends_at');
            $table->dropColumn('voting_starts_at');
            $table->dropColumn('voting_ends_at');
        });
    }
};
