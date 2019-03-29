function d(arg) {
    document.querySelector(".jeu").innerHTML+="<p>" + arg + "</p>";

}

function Player(pseudo, race, pdv, attaque, lvl, arme, xp, sort, potion) {
    this.pseudo = pseudo,
    this.race = race,
    this.pdv = pdv,
    this.attaque = attaque,
    this.lvl = lvl,
    this.arme = arme,
    this.xp = xp,
    this.sort = sort,
    this.potion = potion;
}

var iop = new Player("Sir Pinpin", "Iop", 200, 40, 1, "Epée", 0);

var cra = new Player("Roger", "Crâ", 150, 35, 1, "Arc", 0);

var sacri = new Player("Boursin", "Sacrieur", 300, 30, 1, "Tête", 0);

var eni = new Player("Clochette", "Eniripsa", 125, 25, 1, "Baguette", 0, "Soins");



function Adversaire(pseudo, pdv, attaque, lvl, arme){
    this.pseudo = pseudo,
    this.pdv = pdv,
    this.attaque = attaque,
    this.lvl = lvl,
    this.arme = arme
}

var monstre = new Adversaire("Kralamour", 250, 40, 5, "Tentacules de la mort qui tue");


var perso;


while (perso = prompt("Choisir un personnage : iop, cra, eni ou sacri")) {

    if (perso == "iop") {
        d(iop.pseudo + " entre dans le donjon au niveau " + iop.lvl + " avec " + iop.xp + "xp. Il a " + iop.pdv + "pdv et " + iop.attaque + " d'attaque.");
        break;
    }
    else if (perso == "cra") {
        d(cra.pseudo + " entre dans le donjon au niveau " + cra.lvl + " avec " + cra.xp + "xp. Il a " + cra.pdv + "pdv et " + cra.attaque + " d'attaque.");
        break;
    } 
    else if (perso == "sacri") {
        d(sacri.pseudo + " entre dans le donjon au niveau " + sacri.lvl + " avec " + sacri.xp + "xp. Il a " + sacri.pdv + "pdv et " + sacri.attaque + " d'attaque.");
        break;
    } 
    else if (perso == "eni") {
        d(eni.pseudo + " entre dans le donjon au niveau " + eni.lvl + " avec " + eni.xp + "xp. Elle a " + eni.pdv + "pdv et " + eni.attaque + " d'attaque.");
        break;
    }
}


d("<img src=img/" + perso +".png>");


d("<br>");

d("Le monstre " + monstre.pseudo + " fait face au héros dans la 1ere salle du donjon. Il est au niveau " + monstre.lvl + " avec " + monstre.pdv + "pdv et " + monstre.attaque + " d'attaque. Il a l'air aggressif, le combat s'annonce tendu !");

d("<br> **************** <br> Que souhaitez vous faire ? <br> <br> **************** <br>");


function initElement() {
    var attak = document.getElementById("attaque");
    attaque.onclick = fight; attakAdverse; victoire;
    var soin = document.getElementById("soins");
    soins.onclick = heal;
    var strength = document.getElementById("force");
    force.onclick = steroide;
};



function victoire(){
    if(monstre.pdv < 0){
        monstre.pdv = 0;
        d(monstre.pseudo + " a été vaincu !");
        if(perso == "iop" || perso == "cra" || perso == "sacri" || perso == "eni") {
            iop.xp += 50;
            cra.xp += 50;
            sacri.xp += 50;
            eni.xp += 50;
            if(iop.xp == 100 || cra.xp == 100 || sacri.xp == 100 || eni.xp == 100){
                iop.lvl += 1;
                iop.xp = iop.xp * 25 / 100 + iop.xp;
                cra.lvl += 1;
                cra.xp = cra.xp * 25 / 100 + cra.xp;
                sacri.lvl += 1;
                sacri.xp = sacri.xp * 25 / 100 + sacri.xp;
                eni.lvl += 1;
                eni.xp = eni.xp * 25 / 100 + eni.xp;
            }
            if(perso == "iop"){
                d("Niveau : " + iop.lvl + ' + Xp gagnée : ' + iop.xp)
            }
            if(perso == "cra"){
                d("Niveau : " + cra.lvl + ' + Xp gagnée : ' + cra.xp)
            }
            if(perso == "sacri"){
                d("Niveau : " + sacri.lvl + ' + Xp gagnée : ' + sacri.xp)
            }
            if(perso == "eni"){
                d("Niveau : " + eni.lvl + ' + Xp gagnée : ' + eni.xp)
            }
        }
    }   
}


function fight() {

    while(monstre.pdv > 0){

    if (perso == "iop" && iop.pdv > 0) {
        d(iop.pseudo + " attaque " + monstre.pseudo + " et lui inflige " + Math.ceil(iop.attaque) + " points de dégats");
        monstre.pdv = monstre.pdv - iop.attaque;
        d("Il reste " + Math.ceil(monstre.pdv) + " points de vie à " + monstre.pseudo);
        victoire();
        break;
    }
    else if (perso == "cra" && cra.pdv > 0){
        d(cra.pseudo + " attaque " + monstre.pseudo + " et lui inflige " + Math.ceil(cra.attaque) + " points de dégats");
        monstre.pdv = monstre.pdv - cra.attaque;
        d("Il reste " + Math.ceil(monstre.pdv) + " points de vie à " + monstre.pseudo);
        victoire();
        break;
    } 
    else if(perso == "sacri" && sacri.pdv > 0){
        d(sacri.pseudo + " attaque " + monstre.pseudo + " et lui inflige " + Math.ceil(sacri.attaque) + " points de dégats");
        monstre.pdv = monstre.pdv - sacri.attaque;
        d("Il reste " + Math.ceil(monstre.pdv) + " points de vie à " + monstre.pseudo);
        victoire();
        break;
    } 
    else if(perso == "eni" && eni.pdv > 0){
        d(eni.pseudo + " attaque " + monstre.pseudo + " et lui inflige " + Math.ceil(eni.attaque) + " points de dégats");
        monstre.pdv = monstre.pdv - eni.attaque;
        d("Il reste " + Math.ceil(monstre.pdv) + " points de vie à " + monstre.pseudo);
        victoire();
        break;
    }
    else if(perso == "iop" && iop.pdv <= 0){
        d(iop.pseudo + " ne peut plus attaquer ! Il est mort...")
        break;
    }
    else if(perso == "cra" && cra.pdv <= 0){
        d(cra.pseudo + " ne peut plus attaquer ! Il est mort...")
        break;
    }
    else if(perso == "sacri" && sacri.pdv <= 0){
        d(sacri.pseudo + " ne peut plus attaquer ! Il est mort...")
        break;
    }
    else if(perso == "eni" && eni.pdv <= 0){
        d(eni.pseudo + " ne peut plus attaquer ! Elle est morte...")
        break;
    }
    }
};

var popo = 5;
function heal() {
    if (perso == "iop" && iop.pdv > 0 && iop.pdv < 200 && popo > 0) {
        iop.pdv = iop.pdv * 20 / 100 + iop.pdv;
        if(iop.pdv >= 200){
            iop.pdv = 200;
        }
        d(iop.pseudo + " se soigne, il a maintenant " + Math.ceil(iop.pdv) + " points de vie");
        popo -= 1;
    } 
    else if (perso == "cra" && cra.pdv > 0 && cra.pdv < 150){
        cra.pdv = cra.pdv * 20 / 100 + cra.pdv;
        if(cra.pdv >= 200){
            cra.pdv = 200;
        }
        d(cra.pseudo + " se soigne, il a maintenant " + Math.ceil(cra.pdv) + " points de vie");
        popo -= 1;
    } 
    else if(perso == "sacri" && sacri.pdv > 0 && sacri.pdv < 300){
        sacri.pdv = sacri.pdv * 20 / 100 + sacri.pdv;
        if(sacri.pdv >= 200){
            sacri.pdv = 200;
        }
        d(sacri.pseudo + " se soigne, il a maintenant " + Math.ceil(sacri.pdv) + " points de vie");
        popo -= 1;
    } 
    else if(perso == "eni" && eni.pdv > 0 && eni.pdv < 125){
        eni.pdv = eni.pdv * 20 / 100 + eni.pdv;
        if(eni.pdv >= 200){
            eni.pdv = 200;
        } 
        d(eni.pseudo + " se soigne, elle a maintenant " + Math.ceil(eni.pdv) + " points de vie");
        popo -= 1;
    }
}; 

var puissance = 3;
function steroide() {
    if (perso == "iop" && puissance > 0) {
        iop.attaque = iop.attaque * 15 / 100 + iop.attaque;
        d(iop.pseudo + " se dope, il a maintenant " + Math.ceil(iop.attaque) + " points d'attaque");
        puissance -= 1;
    } 
    else if (perso == "cra" && puissance > 0){
        cra.attaque = cra.attaque * 15 / 100 + cra.attaque;
        d(cra.pseudo + " se dope, il a maintenant " + Math.ceil(cra.attaque) + " points d'attaque");
        puissance -= 1;
    } 
    else if(perso == "sacri" && puissance > 0){
        sacri.attaque = sacri.attaque * 15 / 100 + sacri.attaque;
        d(sacri.pseudo + " se dope, il a maintenant " + Math.ceil(sacri.attaque) + " points d'attaque");
        puissance -= 1;
    } 
    else if(perso == "eni" && puissance > 0){
        eni.attaque = eni.attaque * 15 / 100 + eni.attaque;
        d(eni.pseudo + " se dope, elle a maintenant " + Math.ceil(eni.attaque) + " points d'attaque");
        puissance -= 1;
    }
};


function attakAdverse(){

    while(monstre.pdv > 0){

        if (perso == "iop" && iop.pdv > 0) {
            d(monstre.pseudo + " attaque " + iop.pseudo + " avec ses " + monstre.arme + " et lui inflige " + monstre.attaque + " points de dégats");
            iop.pdv = iop.pdv - monstre.attaque;
            d("Il reste " + Math.ceil(iop.pdv) + " points de vie à " + iop.pseudo);
        }
        if (perso == "cra" && cra.pdv > 0) {
            d(monstre.pseudo + " attaque " + cra.pseudo + " avec ses " + monstre.arme + " et lui inflige " + monstre.attaque + " points de dégats");
            cra.pdv = cra.pdv - monstre.attaque;
            d("Il reste " + Math.ceil(cra.pdv) + " points de vie à " + cra.pseudo);
        }

        if (perso == "sacri" && sacri.pdv > 0) {
            d(monstre.pseudo + " attaque " + sacri.pseudo + " avec ses " + monstre.arme +  " et lui inflige " + monstre.attaque + " points de dégats");
            sacri.pdv = sacri.pdv - monstre.attaque;
            d("Il reste " + Math.ceil(sacri.pdv) + " points de vie à " + sacri.pseudo);
        }

        if (perso == "eni" && eni.pdv > 0) {
            d(monstre.pseudo + " attaque " + eni.pseudo + " avec ses " + monstre.arme +  " et lui inflige " + monstre.attaque + " points de dégats");
            eni.pdv = eni.pdv - monstre.attaque;
            d("Il reste " + Math.ceil(eni.pdv) + " points de vie à " + eni.pseudo);
        }
      break;
    }
};