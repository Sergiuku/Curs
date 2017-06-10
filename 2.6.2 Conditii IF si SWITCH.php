<?php
$este_autentificat = TRUE;
$este_administrator = TRUE;
if ($este_autentificat) {
    echo 'Esti autentificat .';
    if ($este_administrator) {
        
        echo 'Esti␣administrator .';
    } else {
        echo 'Nu esti administrator .';
    }
} else {
    echo 'Nu esti autentificat ';
}


/* Intrebare:
 * De ce codul anterior nu are în ramura else de pe linia 13 încă un if/else în interior pentru cazul în
 * care vizitatorul este și administrator?
 
 * Raspuns:
 * Pentru a fi administrator trebuie sa fii autentificat. Codul va verifica prima data daca esti autentificat sau nu.
 * Dupa verificarea conditie(daca esti autentificat) va trece la urmatoarea conditie pentru a verifica daca esti administrator.
 * Nefiind autentificat nu mai are de ce sa verfice daca este administrator. 
 * Avem urmatoarele posibilitati: Autentificat si administrator; autentificat fara a fi administrator; neautentificat.
 * Ordinea in care am scris posibilitatile va fi si ordinea in care php-ul va verifica conditiile.
 */