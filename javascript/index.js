const voorraad = document.getElementById('voorraad');
const verwijderen = document.getElementById('verwijderen');
const toevoegen = document.getElementById('toevoegen');
const title = document.getElementById('title');

//Voor als je het standaart weg wilt hebben.
//spelRegels.style.display = "none";
//title.style.display = "none";
verwijderen.style.display = "none";
toevoegen.style.display = "none"
let vooraad2 = false
let verwijderen2 = false
let toevoegen2 = false

function showVoorraad() {
    hideAll()
    title.innerHTML = "Voorraad";
    title.style.display = "block";
    voorraad.style.display = "flex";
}

function hideVoorraad() {
    voorraad.style.display = "none";
    title.style.display = "none";
}

function showVerwijderen() {
    hideAll()
    title.innerHTML = "Verwijderen";
    title.style.display = "block";
    verwijderen.style.display = "flex";
}

function hideVerwijderen() {
    title.style.display = "none";
    verwijderen.style.display = "none";
}

function showToevoegen() {
    hideAll()
    title.innerHTML = "Toevoegen";
    title.style.display = "block";
    toevoegen.style.display = "flex";
}

function hideToevoegen() {
    title.style.display = "none";
    toevoegen.style.display = "none";
}

function hideAll() {
    hideVoorraad()
    hideVerwijderen()
    hideToevoegen()
    voorraad2 = true
    verwijderen2 = true
    toevoegen2 = true
}


function toggleVoorraad() {
    if (voorraad2) {
        hideAll()
        showVoorraad()
        vooraad2 = false
    } else {
        hideAll()
    }
}

function toggleVerwijderen() {
    if (verwijderen2) {
        hideAll()
        showGholes()
        verwijderen2 = false
    } else {
        hideAll()
    }
}

function toggleToevoegen() {
    if (toevoegen2) {
        hideAll()
        showToevoegen()
        toevoegen2 = false
    } else {
        hideAll()
    }
}
