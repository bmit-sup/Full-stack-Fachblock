<?php

// Festlegen des Namespace, um die Klassenstruktur der Anwendung zu organisieren
namespace App\Http\Controllers;

// Importieren der TodoItem-Modellklasse und der Request-Klasse
use App\Models\TodoItem;
use Illuminate\Http\Request;

// Definition der TodoItemController-Klasse, die von der Basis-Controller-Klasse erbt
class TodoItemController extends Controller
{
    /**
     * Erstellt ein neues TodoItem.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Erstellen eines neuen TodoItems mit den Daten aus der HTTP-Anfrage
        $todoItem = TodoItem::create($request->all());
        
        // Rückgabe des erstellten TodoItems als JSON-Antwort mit dem Statuscode 201
        return response()->json($todoItem, 201);
    }

    /**
     * Zeigt eine Liste aller TodoItems.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        // Rückgabe aller TodoItems aus der Datenbank
        return TodoItem::all();
    }

    /**
     * Zeigt ein spezifisches TodoItem anhand seiner ID.
     *
     * @param  int  $id
     * @return \App\Models\TodoItem
     */
    public function show($id)
    {
        // Suche und Rückgabe eines TodoItems oder Fehler, wenn es nicht gefunden wird
        return TodoItem::findOrFail($id);
    }

    /**
     * Aktualisiert ein spezifisches TodoItem.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Suche des TodoItems, Fehler wenn nicht gefunden
        $todoItem = TodoItem::findOrFail($id);

        // Aktualisierung des TodoItems mit den neuen Daten
        $todoItem->update($request->all());

        // Rückgabe des aktualisierten TodoItems als JSON-Antwort mit dem Statuscode 200
        return response()->json($todoItem, 200);
    }

    /**
     * Löscht ein spezifisches TodoItem.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        // Suche und Löschen des TodoItems, Fehler wenn nicht gefunden
        TodoItem::findOrFail($id)->delete();

        // Rückgabe einer leeren JSON-Antwort mit dem Statuscode 204
        return response()->json(null, 204);
    }
}