<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('activity_logs', function (Blueprint $table) {
            if (! Schema::hasColumn('activity_logs', 'activity')) {
                $table->string('activity')->nullable()->after('user_id');
            }

            if (! Schema::hasColumn('activity_logs', 'method')) {
                $table->string('method')->nullable()->after('ip_address');
            }

            if (! Schema::hasColumn('activity_logs', 'url')) {
                $table->text('url')->nullable()->after('method');
            }

            if (! Schema::hasColumn('activity_logs', 'user_agent')) {
                $table->text('user_agent')->nullable()->after('url');
            }
        });

        if (Schema::hasColumn('activity_logs', 'action') && Schema::hasColumn('activity_logs', 'activity')) {
            DB::table('activity_logs')
                ->whereNull('activity')
                ->whereNotNull('action')
                ->update([
                    'activity' => DB::raw('action'),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down(): void
    {
        Schema::table('activity_logs', function (Blueprint $table) {
            if (Schema::hasColumn('activity_logs', 'user_agent')) {
                $table->dropColumn('user_agent');
            }

            if (Schema::hasColumn('activity_logs', 'url')) {
                $table->dropColumn('url');
            }

            if (Schema::hasColumn('activity_logs', 'method')) {
                $table->dropColumn('method');
            }
        });
    }
};
