<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('nim')->unique();
//            $table->string('firstName');
//            $table->string('lastName');
            $table->string('namaAyah');
            $table->string('namaIbu');
            $table->string('tmpLahir')->nullable();
            $table->date('tglLahir')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
