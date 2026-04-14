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
        Schema::create('twirps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();// o foreign é a chave estrangeira que vai ligar um twirpe a um usuario, o nullable permite que seja nulo a resenha, e o cascadeOnDelete é pra cso o Usuario seja deleta o twirpe seja tbm//
            $table->string('message', 255);
            $table->timestamps(); //guarda a data de create e de update pelo que eu entendi//
        });
    }
    /** teste pra um twirp gerado, da pra entender o que cada parada faz seguindo os mysql
    *    \DB::table('twirps')->insert([
    *    'user_id' => null,  // Because we don't have a user, we can just leave it off
    *    'message' => 'My first twirp in the database!',
    *    'created_at' => now(),  // Laravel doesn't give these by default when using DB
    *    'updated_at' => now()
    *   ]);
    */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('twirps');
    }
};
