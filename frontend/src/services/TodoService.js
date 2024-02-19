// Importieren der axios-Bibliothek zur Abwicklung von HTTP-Anfragen
import axios from 'axios';

// Festlegen der Basis-URL für die API-Anfragen
const API_URL = 'http://localhost:8000/api/todo-items';

// Definition der Funktion 'getAll', um alle Todo-Elemente zu erhalten
const getAll = () => {
    // Durchführung einer GET-Anfrage an die API und Rückgabe des Ergebnisses
    return axios.get(API_URL);
};

// Definition der Funktion 'create', um ein neues Todo-Element zu erstellen
const create = (data) => {
    // Durchführung einer POST-Anfrage an die API mit den bereitgestellten Daten und Rückgabe des Ergebnisses
    return axios.post(API_URL, data);
};

// Zuweisen der Funktionen zu einem Objekt
const todoService = {
    getAll,
    create
};

// Export des zugewiesenen Objekts als Modul
export default todoService;