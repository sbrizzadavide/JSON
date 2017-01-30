# JSON-Using-PHP

Un piccolo progetto PHP in cui si utilizza JSON tramite Ajax per ottenere nome, cognome e classe di alcuni studenti contattando il server ma senza ricaricare la pagina. Il tutto si può scegliere tramite due menù a tendina.

#### Come funziona?

### Il file select.php
Durante il caricamento della pagina viene chiamata la funzione `reload` (nel `<body>`) che, attraverso uno script in JavaScript che richiama una pagina php, crea per la prima volta il file JSON visualizzando poi a video i dati da esso contenuti.

Nei `<select>` poi, viene richiamata un’altra funzione che modifica il contenuto della pagina a seconda dei valori che sono selezionati in **entrambi** i `<select>`.

### Il file obj.php
Il file in questione si occupa di:

* Creare un array
* Inserire dei valori all'interno di quest’ultimo (i valori possono anche essere recuperati attraverso un’interrogazione ad un database invece di essere inventati).
* Con l’utilizzo del metodo `json_encode` genera il codice JSON e (in questo caso) anche se venissero apportate delle modifiche, non sarebbero effettive fino ad un aggiornamento di QUESTA pagina .php (obj.php) e quindi fino alla chiamata di una funzione (presente nel file javascript) che utilizza la programmazione AJAX.

### Il file ajax.js
Questo file contiene le funzioni che utilizzano la tecnica di programmazione AJAX combinata al JSON per modificare il contenuto della pagina senza doverla aggiornare 

Nel file javascript, sono presenti 2 funzioni:

* La prima funzione è finalizzata a visualizzare a video il contenuto del file JSON a seconda della persona e della caratteristica (nome, cognome o data) selezionata;
* La seconda funzione è richiamata nell’apertura del tag body e con la sua esecuzione, viene caricato il contenuto del primo menù a tendina (dove sono contenuti i nomi).

L’utilizzo di un oggetto di classe **XMLHttpRequest**, la condizione `if` ed i metodi `(xmlhttp).onreadystatechange`, `(JSON).parse`, `(xmlhttp).open` e `(xmlhttp).send`, insieme, consistono nella tecnica di programmazione AJAX. 

* `onreadystatechange`: metodo applicato sull’oggetto di classe XMLHttpRequest che aggiorna il contenuto della pagina al cambiamento di stato dell’oggetto (quando riceve la risposta dal server)
* `parse`: metodo utilizzato per convertire la stringa restituita dal JSON in un array di oggetti
* `open`: metodo creatore della richiesta che verrà inviata al web server
* `send`: metodo che invia la richiesta al web server 
