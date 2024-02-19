<?php

// Deklaration des Namespace, der die Struktur der Anwendungslogik organisiert
namespace App\Models;

// Import der Eloquent Model-Klasse aus Laravel, die ORM-Funktionalitäten bereitstellt
use Illuminate\Database\Eloquent\Model;

// Definition der TodoItem-Klasse, die von der Eloquent Model-Klasse erbt
class TodoItem extends Model
{
    // Festlegung des Tabellennamens in der Datenbank, der diesem Modell zugeordnet ist
    protected $table = 'todo_items';

    // Deklaration von Attributen, die einer Massenzuweisung unterliegen können
    // Dies schützt vor Massenzuweisungs-Sicherheitsrisiken
    protected $fillable = [
        'title',         // Titel des Todo-Elements
        'description',   // Beschreibung des Todo-Elements
        'is_completed',  // Status, ob das Todo-Element abgeschlossen ist
        'due_date',      // Fälligkeitsdatum des Todo-Elements
        // Hinweis: created_at und updated_at werden automatisch von Eloquent behandelt
    ];

    // Optional: Konvertierung von Datenbankfeldern in native PHP-Datentypen
    // Dies erleichtert die Handhabung dieser Felder im Code
    protected $casts = [
        'is_completed' => 'boolean', // Konvertiert is_completed in einen Booleschen Wert
        'due_date' => 'date',        // Konvertiert due_date in ein PHP Datum-Objekt
        // Hinweis: created_at und updated_at sind standardmässig Datums-/Zeitfelder
    ];

    // Optional: Definierung von Datumseigenschaften, die keine Zeitstempel sind
    // Nützlich für die Handhabung von Datumsoperationen auf diesen Feldern
    protected $dates = [
        'due_date', // Fügt due_date zu den Datumsfeldern des Modells hinzu
    ];
}
