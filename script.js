function trierNotes(etudiants) {
    for (var key in etudiants) {
        var lignes = document.getElementsByClassName(key);
        var lignesArray = Array.from(lignes);
        if (etudiants[key] > 10) {
            lignesArray.forEach(element => {
                element.style.color = 'green';
            });
        }
        else {
            lignesArray.forEach(element => {
                element.style.color = 'red';
            });
        }
    }
}

function calculerMoyenne(notesEcran) {
    console.log(notesEcran);
    var somme = 0;
    var nombreDeNotes = 0;
    
    for (var i = 0; i < notesEcran.length; i++) {
        if (!isNaN(notesEcran[i])) {
            somme += parseInt(notesEcran[i]);
            nombreDeNotes++;
        }
    }
    
    if (nombreDeNotes > 0) {
        var moyenne = somme / nombreDeNotes;
        document.write('La moyenne est: ' + moyenne);
    } else {
        document.write('Aucune note valide trouvée.');
    }
}