<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('role')->default(2)->comment('0 => super,1=>admin ,2=> user');
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->text('ghl_api_key')->nullable();
            $table->text('location')->nullable()->unique();
            $table->boolean('is_active')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('Cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'role' => 0,
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'added_by' => 1,
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
