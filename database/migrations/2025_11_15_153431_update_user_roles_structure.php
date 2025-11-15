<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * New roles: 1=superadmin, 2=admin, 3=redacelec, 4=student
     */
    public function up(): void
    {
        // Update existing roles
        // Old role 3 (admin) -> New role 2 (admin)
        DB::table('users')->where('role', 3)->update(['role' => 2]);
        
        // Old role 2 (student) -> New role 4 (student)
        DB::table('users')->where('role', 2)->update(['role' => 4]);
        
        // Old role 1 (user) -> New role 4 (student) - converting users to students
        DB::table('users')->where('role', 1)->update(['role' => 4]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverse the role changes
        DB::table('users')->where('role', 4)->update(['role' => 2]);
        DB::table('users')->where('role', 2)->update(['role' => 3]);
    }
};
