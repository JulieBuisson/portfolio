function d(arg) {
    document.write(arg + "<br>");
}

// Date

var date = new Date();

var jour = document.getElementById('jour');
var mois = document.getElementById('mois');
var annee = document.getElementById('annee');

var d = date.getDate();
var m = date.getMonth() + 1;
var y = date.getFullYear();
var year = y - 25;

jour.innerHTML += "<option>" + d + "</option>";
mois.innerHTML += "<option>" + m + "</option>";
annee.innerHTML += "<option>" + y + "</option>";

for (i = 1; i <= 31; i++) {
    jour.innerHTML += "<option>" + i + "</option>"
};
for (i = 1; i <= 12; i++) {
    mois.innerHTML += "<option>" + i + "</option>"
};
for (i = year; i <= date.getFullYear() + 25; i++) {
    annee.innerHTML += "<option>" + i + "</option>"
};


// Nouveau Client  // Expedier à

function Client(societe, nom, rue, code_postal_ville, numero) {
    this.societe = societe,
        this.nom = nom,
        this.rue = rue,
        this.code_postal_ville = code_postal_ville,
        this.numero = numero;
}
// Déclaration des nouveaux clients

var umbrella = ["Umbrella Corporation", "Umbrella", "7 rue du Hive", "66600 Racoon City", "01.34.56.28.51"];

var blizzard = ["Blizzard Entertainment", "Blizzard", "112 rue de la Brise", "75015 Paris", "01.28.74.32.45"];

var sony = ["Sony Entertainment", "Sony", "34 avenue de la Paix", "75016 Paris", "01.84.56.18.27"];

var fujikawa = ["Fuji Corporation", "Fujikawa", "18 blv du pecheur", "18750 Mont-Gendre", "01.57.48.89.99"];

var ubisoft = ["Ubisoft Paris Studio", "Ubisoft", "57 avenue du Boulgour", "28475 Funkytown", "01.37.78.71.95"];

//Affichage des clients dans le 1er bloc (select)

var select1 = document.getElementById('newClient');

select1.innerHTML += "<option>" + 'Blizzard' + "</option>";
select1.innerHTML += "<option>" + 'Sony' + "</option>";
select1.innerHTML += "<option>" + 'Umbrella' + "</option>";
select1.innerHTML += "<option>" + 'Ubisoft' + "</option>";
select1.innerHTML += "<option>" + 'Fujikawa' + "</option>";

//Affichage des clients dans le 2ème bloc (select)

var select2 = document.getElementById('newExpediteur');

select2.innerHTML += "<option>" + 'Fujikawa' + "</option>";
select2.innerHTML += "<option>" + 'Ubisoft' + "</option>";
select2.innerHTML += "<option>" + 'Umbrella' + "</option>";
select2.innerHTML += "<option>" + 'Blizzard' + "</option>";
select2.innerHTML += "<option>" + 'Sony' + "</option>";

//Var pour remplir les inputs du bas de la page

var input = document.getElementsByTagName("input");
var nomSociete = document.getElementById('redigerCheque');
var tel = document.getElementById("telephone");
var adresse = document.getElementById("adresse");

//Remplisage du 1er select/option avec les valeurs de chaque clients

select1.onclick = function () {
    //Nouveau client "=false" pour pouvoir remplir les champs vides
    if (select1.value == "Nouveau client") {
        input[5].value = "";
        input[5].disabled = false;
        input[6].value = "";
        input[6].disabled = false;
        input[7].value = "";
        input[7].disabled = false;
        input[8].value = "";
        input[8].disabled = false;
        input[9].value = "";
        input[9].disabled = false;
    }
    //Clients pré-enregistrés "=true" pour bloquer/empecher le changement de données
    else if (select1.value == "Ubisoft") {
        input[5].value = ubisoft[0];
        input[5].disabled = true;
        input[6].value = ubisoft[1];
        input[6].disabled = true
        input[7].value = ubisoft[2];
        input[7].disabled = true;
        input[8].value = ubisoft[3];
        input[8].disabled = true;
        input[9].value = ubisoft[4];
        input[9].disabled = true;
        //If pour renvoyer les infos pré-enregistrés en bas de la page
        if (select1.value == "Ubisoft") {
            nomSociete.value = ubisoft[0];
            tel.value = ubisoft[4];
            adresse.value = ubisoft[2];
            d(nomSociete, tel, adresse);
        }
    }
    else if (select1.value == "Sony") {
        input[5].value = sony[0];
        input[5].disabled = true;
        input[6].value = sony[1];
        input[6].disabled = true
        input[7].value = sony[2];
        input[7].disabled = true;
        input[8].value = sony[3];
        input[8].disabled = true;
        input[9].value = sony[4];
        input[9].disabled = true;
        if (select1.value == "Sony") {
            nomSociete.value = sony[0];
            tel.value = sony[4];
            adresse.value = sony[2];
            d(nomSociete, tel, adresse);
        }
    }
    else if (select1.value == "Umbrella") {
        input[5].value = umbrella[0];
        input[5].disabled = true;
        input[6].value = umbrella[1];
        input[6].disabled = true
        input[7].value = umbrella[2];
        input[7].disabled = true;
        input[8].value = umbrella[3];
        input[8].disabled = true;
        input[9].value = umbrella[4];
        input[9].disabled = true;
        if (select1.value == "Umbrella") {
            nomSociete.value = umbrella[0];
            tel.value = umbrella[4];
            adresse.value = umbrella[2];
            d(nomSociete, tel, adresse);
        }
    }
    else if (select1.value == "Fujikawa") {
        input[5].value = fujikawa[0];
        input[5].disabled = true;
        input[6].value = fujikawa[1];
        input[6].disabled = true
        input[7].value = fujikawa[2];
        input[7].disabled = true;
        input[8].value = fujikawa[3];
        input[8].disabled = true;
        input[9].value = fujikawa[4];
        input[9].disabled = true;
        if (select1.value == "Fujikawa") {
            nomSociete.value = fukikawa[0];
            tel.value = fujikawa[4];
            adresse.value = fujikawa[2];
            d(nomSociete, tel, adresse);
        }
    }
    else if (select1.value == "Blizzard") {
        input[5].value = blizzard[0];
        input[5].disabled = true;
        input[6].value = blizzard[1];
        input[6].disabled = true
        input[7].value = blizzard[2];
        input[7].disabled = true;
        input[8].value = blizzard[3];
        input[8].disabled = true;
        input[9].value = blizzard[4];
        input[9].disabled = true;
        if (select1.value == "Blizzard") {
            nomSociete.value = blizzard[0];
            tel.value = blizzard[4];
            adresse.value = blizzard[2];
            d(nomSociete, tel, adresse);
        }
    }
}


//Remplissage du 2ème select/option avec les valeurs de chaque clients (pareil que le 1er bloc au dessus)

select2.onclick = function () {
    if (select2.value == "Nouveau client") {
        input[10].value = "";
        input[10].disabled = false;
        input[11].value = "";
        input[11].disabled = false;
        input[12].value = "";
        input[12].disabled = false;
        input[13].value = "";
        input[13].disabled = false;
        input[14].value = "";
        input[14].disabled = false;
    }
    else if (select2.value == "Ubisoft") {
        input[10].value = ubisoft[0];
        input[10].disabled = true;
        input[11].value = ubisoft[1];
        input[11].disabled = true
        input[12].value = ubisoft[2];
        input[12].disabled = true;
        input[13].value = ubisoft[3];
        input[13].disabled = true;
        input[14].value = ubisoft[4];
        input[14].disabled = true;
    }
    else if (select2.value == "Sony") {
        input[10].value = sony[0];
        input[10].disabled = true;
        input[11].value = sony[1];
        input[11].disabled = true
        input[12].value = sony[2];
        input[12].disabled = true;
        input[13].value = sony[3];
        input[13].disabled = true;
        input[14].value = sony[4];
        input[14].disabled = true;
    }
    else if (select2.value == "Umbrella") {
        input[10].value = umbrella[0];
        input[10].disabled = true;
        input[11].value = umbrella[1];
        input[11].disabled = true
        input[12].value = umbrella[2];
        input[12].disabled = true;
        input[13].value = umbrella[3];
        input[13].disabled = true;
        input[14].value = umbrella[4];
        input[14].disabled = true;
    }
    else if (select2.value == "Fujikawa") {
        input[10].value = fujikawa[0];
        input[10].disabled = true;
        input[11].value = fujikawa[1];
        input[11].disabled = true
        input[12].value = fujikawa[2];
        input[12].disabled = true;
        input[13].value = fujikawa[3];
        input[13].disabled = true;
        input[14].value = fujikawa[4];
        input[14].disabled = true;
    }
    else if (select2.value == "Blizzard") {
        input[10].value = blizzard[0];
        input[10].disabled = true;
        input[11].value = blizzard[1];
        input[11].disabled = true
        input[12].value = blizzard[2];
        input[12].disabled = true;
        input[13].value = blizzard[3];
        input[13].disabled = true;
        input[14].value = blizzard[4];
        input[14].disabled = true;
    }
}

// Tableau

function Produits(code, libelle, prix) {
    this.code = code,
        this.libelle = libelle,
        this.prix = prix;
}

//Déclaration des 6 options (produits à vendre)

var option1 = ["#463652", "Pack PS4 Slim Black 4K 2To", 399.99];
var option2 = ["#654251", "World of Warcraft Edition Collector", 369.99]
var option3 = ["#754125", "Marvel Spider Man", 69.99]
var option4 = ["#895463", "Assasin's Creed Odyssey", 69.99]
var option5 = ["#254879", "Resident Evil VII BioHazard Collector", 89.99]
var option6 = ["#325468", "Tekken 7 Edition Collector Deluxe Premium", 299.99]

//Appel des différents selecteurs

var sel = document.getElementById('produit');
var sel2 = document.getElementById('produit2');
var sel3 = document.getElementById('produit3');
var sel4 = document.getElementById('produit4');

//Affichage des options dans le select

sel.innerHTML += "<option>" + "#463652" + "</option>";
sel.innerHTML += "<option>" + "#654251" + "</option>";
sel.innerHTML += "<option>" + "#754125" + "</option>";
sel.innerHTML += "<option>" + "#895463" + "</option>";
sel.innerHTML += "<option>" + "#254879" + "</option>";
sel.innerHTML += "<option>" + "#325468" + "</option>";

sel2.innerHTML += "<option>" + "#463652" + "</option>";
sel2.innerHTML += "<option>" + "#654251" + "</option>";
sel2.innerHTML += "<option>" + "#754125" + "</option>";
sel2.innerHTML += "<option>" + "#895463" + "</option>";
sel2.innerHTML += "<option>" + "#254879" + "</option>";
sel2.innerHTML += "<option>" + "#325468" + "</option>";

sel3.innerHTML += "<option>" + "#463652" + "</option>";
sel3.innerHTML += "<option>" + "#654251" + "</option>";
sel3.innerHTML += "<option>" + "#754125" + "</option>";
sel3.innerHTML += "<option>" + "#895463" + "</option>";
sel3.innerHTML += "<option>" + "#254879" + "</option>";
sel3.innerHTML += "<option>" + "#325468" + "</option>";

sel4.innerHTML += "<option>" + "#463652" + "</option>";
sel4.innerHTML += "<option>" + "#654251" + "</option>";
sel4.innerHTML += "<option>" + "#754125" + "</option>";
sel4.innerHTML += "<option>" + "#895463" + "</option>";
sel4.innerHTML += "<option>" + "#254879" + "</option>";
sel4.innerHTML += "<option>" + "#325468" + "</option>";

//Var pour "appeler" chaques cases du tableau ou vont s'afficher les informations relatives aux produits

var libe1 = document.getElementById('libe1');
var prix1 = document.getElementById('prix1');

var libe2 = document.getElementById('libe2');
var prix2 = document.getElementById('prix2');

var libe3 = document.getElementById('libe3');
var prix3 = document.getElementById('prix3');

var libe4 = document.getElementById('libe4');
var prix4 = document.getElementById('prix4');

//function pour remplir le libellé et le prix des produits (select)

function Produits(sel, lib, select_valeur, prix, opt, i) {
    if (sel.value == select_valeur) {
        lib.innerHTML = opt[i];
        i += 1;
        prix.innerHTML = opt[i];
    }
};

sel.onclick = function () {
    Produits(sel, libe1, "#463652", prix1, option1, 1);
    Produits(sel, libe1, "#654251", prix1, option2, 1);
    Produits(sel, libe1, "#754125", prix1, option3, 1);
    Produits(sel, libe1, "#895463", prix1, option4, 1);
    Produits(sel, libe1, "#254879", prix1, option5, 1);
    Produits(sel, libe1, "#325468", prix1, option6, 1);
};

sel2.onclick = function () {
    Produits(sel2, libe2, "#463652", prix2, option1, 1);
    Produits(sel2, libe2, "#654251", prix2, option2, 1);
    Produits(sel2, libe2, "#754125", prix2, option3, 1);
    Produits(sel2, libe2, "#895463", prix2, option4, 1);
    Produits(sel2, libe2, "#254879", prix2, option5, 1);
    Produits(sel2, libe2, "#325468", prix2, option6, 1);
};

sel3.onclick = function () {
    Produits(sel3, libe3, "#463652", prix3, option1, 1);
    Produits(sel3, libe3, "#654251", prix3, option2, 1);
    Produits(sel3, libe3, "#754125", prix3, option3, 1);
    Produits(sel3, libe3, "#895463", prix3, option4, 1);
    Produits(sel3, libe3, "#254879", prix3, option5, 1);
    Produits(sel3, libe3, "#325468", prix3, option6, 1);
};

sel4.onclick = function () {
    Produits(sel4, libe4, "#463652", prix4, option1, 1);
    Produits(sel4, libe4, "#654251", prix4, option2, 1);
    Produits(sel4, libe4, "#754125", prix4, option3, 1);
    Produits(sel4, libe4, "#895463", prix4, option4, 1);
    Produits(sel4, libe4, "#254879", prix4, option5, 1);
    Produits(sel4, libe4, "#325468", prix4, option6, 1);
};

// calcul du prix * la quantité pour retourner/remplir le montant

var montant = document.getElementById('montant');
var quantite = document.getElementById('nbr');
var prix = document.getElementById('prix1');

var montant2 = document.getElementById('montant2');
var quantite2 = document.getElementById('nbr2');
var prix2 = document.getElementById('prix2');

var montant3 = document.getElementById('montant3');
var quantite3 = document.getElementById('nbr3');
var prix3 = document.getElementById('prix3');

var montant4 = document.getElementById('montant4');
var quantite4 = document.getElementById('nbr4');
var prix4 = document.getElementById('prix4');


function calcul(mont, quant, p) {
    var x = Number(quant.value) * Number(p.innerHTML);
    mont.innerHTML = x.toFixed(2);
    sous();
    tva();
    tt();
    remise()
}
quantite.onclick = function () {
    calcul(montant, quantite, prix);
}
quantite.onkeyup = function () {
    calcul(montant, quantite, prix);
}

quantite2.onclick = function () {
    calcul(montant2, quantite2, prix2);
}
quantite2.onkeyup = function () {
    calcul(montant2, quantite2, prix2);
}

quantite3.onclick = function () {
    calcul(montant3, quantite3, prix3);
}
quantite3.onkeyup = function () {
    calcul(montant3, quantite3, prix3);
}

quantite4.onclick = function () {
    calcul(montant4, quantite4, prix4);
}
quantite4.onkeyup = function () {
    calcul(montant4, quantite4, prix4);
}

// fin des calculs des produits

// Partie en dessous du tableau : Sous-total, TVA, etc...

var sousT = document.getElementById('ss');

function sous() {
    var x = Number(montant.innerHTML) + Number(montant2.innerHTML) + Number(montant3.innerHTML) + Number(montant4.innerHTML);
    sousT.innerHTML = x.toFixed(2);
}

var tv = document.getElementById('tva');
var portM = document.getElementById('port');

function tva() {
    var pht = Number(sousT.innerHTML);
    var pm = Number(sousT.innerHTML);
    tv.innerHTML = (pht * 20 / 100).toFixed(2);
    portM.innerHTML = (pm * 10 / 100).toFixed(2);
}

var ttc = document.getElementById('total');

function tt() {
    var totalT = Number(sousT.innerHTML) + Number(tv.innerHTML) + Number(portM.innerHTML);
    ttc.innerHTML = totalT.toFixed(2);
}

var rem = document.getElementById('remise');
var remise1 = document.getElementById('remise5');

function remise() {
    if (ttc.innerHTML >= 1000) {
        rem.style.display = "block";
        remise1.innerHTML = (ttc.innerHTML * 5 / 100).toFixed(2);
    }
    else if (h.innerHTML <= 1000) {
        rem.style.display = "none";
    }
}


//Boutton imprimer

function imprimer() {
    window.print();
}