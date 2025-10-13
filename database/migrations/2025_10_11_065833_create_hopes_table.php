<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_hopes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hopes', function (Blueprint $table) {
            $table->id();
            // Nama pengirim (kita set hardcoded sebagai "Nilam Sahfa")
            $table->string('sender_name')->default('Nilam Sahfa'); 
            // Isi harapan
            $table->text('content'); 
            // Flag rahasia: 1 (rahasia), 0 (publik). Digunakan untuk memastikan hanya Anda yang lihat.
            $table->boolean('is_private')->default(1); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hopes');
    }
};