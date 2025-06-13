# Algorithmen und Datenstrukturen Chatbot

Ein spezialisierter Chatbot für die Vorlesung "Algorithmen und Datenstrukturen".

## Installation

- Umgebung
    - Für die Laravel Applikation werden PHP, Composer (siehe [Laravel Docs](https://laravel.com/docs/12.x/installation#installing-php)) und npm (siehe [Node Docs](https://nodejs.org/en/download)) benötigt.
    - Für die Python-Sandbox und den PostgreSQL-Container werden eine Containerruntime wie [Docker](https://docs.docker.com/get-started/get-docker/) oder [Podman](https://podman.io/docs/installation) sowie ein Compose-Tool wie [Docker Compose](https://docs.docker.com/compose/install/) oder [Podman Compose](https://podman-desktop.io/docs/compose/setting-up-compose) benötigt.
- Installation & Starten
    - Um die Sandbox zu bauen und sowohl die Sandbox als auch PostgreSQL zu starten, kann folgenden Befehl genutzt werden:
      ```bash
      docker compose up -d
      ```
    - Zur Installation und Einrichtung aller für den Laravel-Service relevanten Abhängigkeiten kann folgender Befehl genutzt werden:
      ```bash
      composer setup
      ```
    - Um die KnowledgeChunks zu importieren wurde ein composer-Script angelegt, welches ausgeführt werden muss.
      ```bash
      composer import
      ```
    - Für die KI-Features wird ein OpenAI-API-Schlüssel benötigt, welcher im `.env`-File hinterlegt werden muss.
      ```
      OPENAI_API_KEY=sk-...
      ```
    - Um die Laravel Anwendung zu starten:
      ```bash
      composer dev
      ```
    - Die Anwendung ist nun unter [localhost:8000](http://localhost:8000) erreichbar.
        - Es wird ein default-User angelegt mit der E-Mail-Adresse **admin@aud-rag.de** und dem Passwort **4711**.

