# esame

La startup Treebu vuole realizzare una nuova piattaforma dove catalogare a livello nazionale le terre incolte sooto il nome di banca della terra.
La piattaforma dovrà permettere di inserire, visionare e modificare la proprietà di ogni terriero, rendendola disponibile alla coltivavione o altro uso.

In particolare, ogni terreno agricolo dovrà essere corredato dai seguenti dati:

- comune di appartenenza
- foto aerea
- dimensione
- foglio catastale
- mappale catastale
- parcella catastale
- tipologia del terreno (argilloso, sabbioso, ghiaioso, tufo)
- tipo di irrigazione (a scorrimento, pozzo, canale, senz'acqua)
- tipo di offerta (vendita, affitto, affido gratuito)
- conone offerta
- disponibile da subito

i seguenti dati saranno visualizzati ordinati per data di pubblicazione (nella pagina home le card relative ai terreni agricoli).
per una visualizzazione più piacevole nella pagina home è prevista solo una preview con immagine e campi essenziali, invece nella pagine di dettaglio sono presenti tutti i dati relativi al terreno.

## Installazione

Nella cartella client, eseguire i comandi da terminale:
```
yarn install
yarn serve
```

Nellla cartella server, modificare il file '.env' inserendo il nome del database, poi eseguire i comandi da terminale:
```
composer update
php artisan migrate
php artisan serve
```

## indicazioni 


per l'esecuzione della prova ho creato una tabella chiamata **_lands_** con tutti i campi citati sopra e  successivamente, con il comando php artisan make:model **_Land_**, il relativo modello chiamato Land.

inoltre ho creato differenti route API rispettando i principi rest:
- GET `/api/lands` - ottiene la lista dei terreni esistenti
- GET `/api/lands/{id}` - ottiente un terreno tramite il suo ID
- POST `/api/lands` - crea un nuovo terreno
- PUT  `/api/lands/{id}` - aggiorna un terreno tramite il suo ID
- DELETE `/api/lands/{id}` - elimina un suo terreno tramite il suo ID

le route client realizzate sono:
- /home - si visualizza tutti i terreni aggiunti in ordine di pubblicazione
- /create - si visualizza una form per aggiungere un nuovo terreno
- /detail/:id - si visualizza il dettaglio di un preciso terreno
- /edit/:id - si visualizza una form dove si potrà modificare i dati relativi a un singolo terreno
