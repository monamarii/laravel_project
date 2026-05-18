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
        // Legacy rename migration. The frogs table is now created directly by
        // the original migration, so this migration is a no-op for new installs.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op.
    }
};
