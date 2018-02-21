<?php
require_once '../inc/functions.php';

/*
 * Exo 6 : Mamie reçoit les p’tits enfants
 *
 * Bon, tant qu'on y est, ça serait bien aussi de calculer leur âge.
 * J'ai toujours eu la bonne mémoire des dates, je connais leur
 * date de naissance par coeur.
 *
 * Seulement, pour calculer leur âge à partir de leur date de naissance,
 * saperlipopette !
 *
 * Si je te rajoute un paramètre `birth` à l'URL, tu crois que tu pourrais
 * aussi me rajouter l'âge ? Je te passe la date sous la forme DD-MM-YYYY.
 * Par exemple :
 *   `exo5.php?name=Zelda&birth=18-05-2003`
 *
 * Ensuite, il te "suffirait" qu'à récupérer, découper, puis comparer…
 *   http://php.net/manual/fr/function.explode.php
 *   http://php.net/manual/fr/function.date.php
 *
 *
 * Allez, bon courage… (mouhahaha)
 */

function hello() {
    $birthDate = $_GET['birth'];
    $birthDate = explode("-", $birthDate);
    $age = date("Y") - $birthDate[2];
    if ($birthDate[1] == date("m")) {
        if ($birthDate[0] < date("j")) {
            return $date--;
        }
        else return $date;
    }
    if ($birthDate[1] < date("m")) {
        return $date--;
    } else {
    return 'Bonjour ' . $_GET['name'] . ', comment tu vas ? Tu as ' . $age . ' maintenant !';
}
}




/*
 * Tests
 * Pas touche !
 */
displayExo(6, (
    hello() === 'Bonjour Elisa, comment tu vas ? Tu as 15 ans maintenant !'
));
