# ! tcgZone


configure un proget js
npm init -y


instale les module ws
npm install ws


cree un fichier serveur.js

<h1>WebSocket Demo</h1>
    <input id="messageInput" type="text" placeholder="Tapez un message..." />
    <button id="sendBtn">Envoyer</button>
    <div id="log"></div>

    <script>
        // Connexion au serveur WebSocket
        const socket = new WebSocket('ws://localhost:8080');

        // Écouter les événements
        socket.onopen = () => {
            console.log('Connecté au serveur WebSocket');
            document.getElementById('log').innerHTML += '<p>Connecté au serveur</p>';
        };

        socket.onmessage = (event) => {
            console.log('Message reçu :', event.data);
            document.getElementById('log').innerHTML += `<p>Serveur : ${event.data}</p>`;
        };

        socket.onerror = (error) => {
            console.error('Erreur WebSocket :', error);
        };

        socket.onclose = () => {
            console.log('Connexion fermée');
            document.getElementById('log').innerHTML += '<p>Connexion fermée</p>';
        };

        // Envoyer un message au serveur
        document.getElementById('sendBtn').addEventListener('click', () => {
            const message = document.getElementById('messageInput').value;
            socket.send(message);
            document.getElementById('log').innerHTML += `<p>Moi : ${message}</p>`;
        });
    </script>