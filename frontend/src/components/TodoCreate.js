// Importieren der benötigten Funktionen und Dienste
import React, { useState } from 'react';
import TodoService from '../services/TodoService';

// Definition der TodoCreate-Komponente
const TodoCreate = () => {
    // Verwendung des useState-Hooks zur Verwaltung des Titels der neuen Aufgabe
    const [title, setTitle] = useState('');

    // Handler-Funktion für das Absenden des Formulars
    const handleSubmit = (event) => {
        // Verhindern des Standardverhaltens des Formulars (Seitenneuladung)
        event.preventDefault();
        
        // Aufruf des TodoService, um eine neue Aufgabe zu erstellen
        TodoService.create({ title }).then(() => {
            // Zurücksetzen des Titels auf einen leeren String nach dem Erstellen der Aufgabe
            setTitle('');
            // Hier könnte optional Code hinzugefügt werden, um die Todo-Liste zu aktualisieren
        });
    };

    // Render-Methode, die das HTML für die Erstellung einer neuen Aufgabe zurückgibt
    return (
        <div>
            <h2>Aufgabe hinzufügen</h2>
            <form onSubmit={handleSubmit}>
                {/* Eingabefeld für den Titel der Aufgabe */}
                <input 
                    type="text" 
                    value={title} 
                    onChange={e => setTitle(e.target.value)} // Aktualisieren des Titels bei jeder Änderung
                    required // Das Feld ist erforderlich, um das Formular zu senden
                />
                <button type="submit">Speichern</button>
            </form>
        </div>
    );
}

// Export der Komponente, damit sie in anderen Teilen der Anwendung verwendet werden kann
export default TodoCreate;
