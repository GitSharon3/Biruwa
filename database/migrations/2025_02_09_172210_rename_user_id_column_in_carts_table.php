<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUserIdColumnInCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('User_id', 'user_id'); // Rename column from 'User_id' to 'user_id'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('user_id', 'User_id'); // Reverse the column name change if needed
        });
    }
}
