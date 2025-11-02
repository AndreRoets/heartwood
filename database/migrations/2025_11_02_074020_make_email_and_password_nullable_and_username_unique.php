<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // If your users table doesn't already have username unique, add it:
            // The username column is already created as unique in the initial users table migration.
            // This logic is no longer needed.

            // Drop the default unique index on email if it exists
            // Default name from Laravel stub is "users_email_unique"
            if (Schema::hasIndex('users', 'users_email_unique')) {
                $table->dropUnique('users_email_unique');
            }

            // Make email & password nullable
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert (if you really need to)
            // The username column was unique from the start, so we don't drop the index here.
            // We only revert the changes made in the `up()` method of this migration.
            
            // Re-add the unique constraint on email and make it non-nullable
            $table->string('email')->nullable(false)->unique()->change();
            
            // Make password non-nullable again
            $table->string('password')->nullable(false)->change();
        });
    }
};
