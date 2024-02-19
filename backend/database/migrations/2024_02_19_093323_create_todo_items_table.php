<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_todo_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoItemsTable extends Migration
{
    public function up()
    {
        Schema::create('todo_items', function (Blueprint $table) {
            $table->id(); // Erstellt eine Auto-Increment-ID
            $table->string('title'); // Titel der Aufgabe
            $table->text('description')->nullable(); // Beschreibung, optional
            $table->boolean('is_completed')->default(false); // Status
            $table->timestamps(); // Erstellt 'created_at' und 'updated_at'
            $table->date('due_date')->nullable(); // Fälligkeitsdatum, optional
        });
    }

    public function down()
    {
        Schema::dropIfExists('todo_items');
    }
}
