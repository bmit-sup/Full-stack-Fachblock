// Importieren von React und verschiedenen Komponenten aus react-router-dom
import React from 'react';
import { NavLink } from 'react-router-dom';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

// Importieren der TodoList- und TodoCreate-Komponenten
import TodoList from './components/TodoList';
import TodoCreate from './components/TodoCreate';

// Definition der App-Komponente
const App = () => {
  return (
    // Verwendung des Router-Komponenten, um das Routing in der Anwendung zu ermöglichen
    <Router>
      <h1>Wichtige Aufgaben</h1>
      {/* Navigationsteil der Anwendung */}
      <nav>
        {/* NavLink-Komponenten für die Navigation, mit aktiver Klassenlogik */}
        <NavLink to="/" className={({ isActive }) => isActive ? 'active' : ''}>Home</NavLink>
        <NavLink to="/create" className={({ isActive }) => isActive ? 'active' : ''}>Neue Aufgabe</NavLink>
      </nav>
      {/* Routes-Komponente, die die verschiedenen Routen definiert */}
      <Routes>
        {/* Route für die TodoList-Komponente auf der Hauptseite ('/') */}
        <Route path="/" element={<TodoList />} />
        {/* Route für die TodoCreate-Komponente unter '/create' */}
        <Route path="/create" element={<TodoCreate />} />
      </Routes>
    </Router>
  );
}

// Export der App-Komponente, damit sie im Index-Datei verwendet werden kann
export default App;
