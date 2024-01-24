# Beitrag zu ToDo-Applikation

Wir freuen uns über Ihr Interesse, zur ToDo-Applikation beizutragen! Dieses Dokument enthält Richtlinien für Beiträge und stellt sicher, dass der Beitragseffektiv und konsistent ist.

## Voraussetzungen

- Grundkenntnisse in Git.
- Erfahrung mit React und Laravel (entsprechend der Codebasis).
- Lesen Sie die Projekt-Dokumentation wie auch die [technische Dokumentation](docs/index.md), um ein Verständnis für das Projekt zu bekommen.

## Beitragsprozess

1. **Forken und Klonen des Repositories**

   - Forken Sie das Hauptrepository und klonen Sie es auf Ihren lokalen Computer. Eine detailiert Anleitung finden Sie unter [Lokale Installation für Projektmitarbeitende](#lokale-installation-für-projektmitarbeitende)

2. **Neuen Branch erstellen**

   - Erstellen Sie für jede Verbesserung oder Bugfix einen neuen Branch.
   - Verwenden Sie einen klaren und beschreibenden Namen für den Branch (z.B. `feature/add-sorting-funktion` oder `bugfix/login-issue`).

3. **Änderungen vornehmen**

   - Führen Sie die notwendigen Änderungen in Ihrem Branch durch.
   - Schreiben Sie klaren und verständlichen Code.
   - Fügen Sie Kommentare hinzu, wo nötig.

4. **Tests durchführen**

   - Stellen Sie sicher, dass die Applikation wie erwartet funktioniert.
   - Führen Sie vorhandene automatisierte Tests mit `php artisan test` durch und entwickeln Sie zusätzliche Tests, um Ihre Codeänderungen zu überprüfen.

5. **Commit Ihre Änderungen**

   - Machen Sie regelmässige Commits mit klaren, präzisen Commit-Nachrichten.
   - Beispielnachricht: `Add sorting functionality to ToDo list`.

6. **Pushen Sie den Branch und Erstellen Sie einen Pull Request**

   - Pushen Sie Ihren Branch zu Ihrem Fork und erstellen Sie einen Pull Request zum Hauptrepository.
   - Beschreiben Sie im Pull Request Ihre Änderungen und den Grund dafür.

7. **Review und Merge**
   - Warten Sie auf das Review durch das Projektteam.
   - Nehmen Sie ggf. erforderliche Änderungen basierend auf dem Feedback des Teams vor.

## Lokale Installation für Projektmitarbeitende

Bevor Sie beginnen, stellen Sie sicher, dass Sie Folgendes installiert haben:

- [Git](https://git-scm.com/)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js und npm](https://nodejs.org/)
- [XAMPP](https://www.apachefriends.org/index.html) oder eine andere Webserver-Lösung mit MySQL

### Schritte zur Einrichtung

1. **Klonen des Repositories:**

   ```bash
   git clone https://github.com/IhrBenutzername/Repo-Name.git
   cd X999X_Todo-App
   ```

2. **Einrichten des Laravel-Back-Ends:**

   - Navigieren Sie in das `backend`-Verzeichnis:

     ```bash
     cd backend
     ```

   - Installieren Sie die PHP-Abhängigkeiten:

     ```bash
     composer install
     ```

   - Erstellen Sie eine Kopie der `.env.example`-Datei und benennen Sie diese in `.env` um:

     ```bash
     cp .env.example .env
     ```

   - Generieren Sie einen App-Schlüssel:

     ```bash
     php artisan key:generate
     ```

   - Richten Sie Ihre Datenbank ein und aktualisieren Sie die entsprechenden Umgebungsvariablen in der `.env`-Datei.

   - Führen Sie die Migrationen aus, um die Datenbanktabellen zu erstellen:

     ```bash
     php artisan migrate
     ```

   - Starten Sie den Laravel-Entwicklungsserver:

     ```bash
     php artisan serve
     ```

3. **Einrichten des React-Front-Ends:**

   - In einem neuen Terminal, navigieren Sie in das `frontend`-Verzeichnis:

     ```bash
     cd frontend
     ```

   - Installieren Sie die Node.js-Abhängigkeiten:

     ```bash
     npm install
     ```

   - Starten Sie den React-Entwicklungsserver:

     ```bash
     npm start
     ```

   - Die Applikation ist nun unter `http://localhost:3000` erreichbar.

## Verhaltenskodex

Bitte folgen Sie unserem Verhaltenskodex der ESPAS in allen Ihren Interaktionen mit dem Projekt.

## Fragen oder Bedenken

Bei Fragen oder Bedenken wenden Sie sich bitte an die Projektleitung über [verena.tausendsassa@espas.ch](mailto:verena.tausendsassa@espas.ch).

Danke, dass Sie zur ToDo-Applikation beitragen!