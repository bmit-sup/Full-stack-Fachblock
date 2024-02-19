// Importieren der notwendigen React-Hooks und des TodoService
import React, { useState, useEffect } from 'react';
import TodoService from '../services/TodoService';

// Definition der TodoList-Komponente
const TodoList = () => {
    // Verwendung des useState-Hooks, um den Zustand der Todo-Liste zu verwalten
    const [todos, setTodos] = useState([]);

    // Verwendung des useEffect-Hooks, um bei der Initialisierung der Komponente Daten zu laden
    useEffect(() => {
        // Aufruf der Methode getAll aus TodoService, um alle Todos zu holen
        TodoService.getAll().then(response => {
            // Aktualisierung des Zustands mit den geladenen Todos
            setTodos(response.data);
        });
    }, []); // Leeres Abhängigkeitsarray bedeutet, dass dieser Effekt nur beim Mounten der Komponente ausgeführt wird

    // Render-Methode, die das HTML für die Todo-Liste zurückgibt
    return (
        <div>
            <h2>Aufgabenliste</h2>
            <ul>
                {/* Durchlaufen der Todos und Darstellung jedes Todo-Elements in einer Liste */}
                {todos.map(todo => (
                    <li key={todo.id}>{todo.title}</li>
                ))}
            </ul>
        </div>
    );
}

// Export der Komponente, damit sie in anderen Teilen der Anwendung verwendet werden kann
export default TodoList;
