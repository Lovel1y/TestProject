<?php

use App\Models\Group;
use App\Models\User;
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
        Schema::create('group_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('group_id');
            $table->dateTime('expired_at');

            //idx
            $table->index('group_id','group_user_group_idx');
            $table->index('user_id','group_user_users_fk');
            //fk
            $table->foreign('group_id','group_user_group_fk')->on('groups')->references('id');
            $table->foreign('user_id','group_user_user_fk')->on('users')->references('id');
            //
            $table->unique(['group_id','user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_users');
    }
};
