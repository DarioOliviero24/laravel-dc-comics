# Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve


# Laravel DC Comics 22 ottobre

1. Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

2. Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
- index()
- show()
- create()
- store()

3. Bonus
Creare il seeder per la tabella comics utilizzando il file in allegato.

# Laravel DC Comics 23 ottobre

1. oggi lavorate sulla stessa repo di ieri e completate le operazioni CRUD.
Bonus

tramite javascript, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.


# Laravel DC Comics 24 ottobre

1. sempre lavorando sulla repo di ieri, potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti.


Bonus:
- validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.


