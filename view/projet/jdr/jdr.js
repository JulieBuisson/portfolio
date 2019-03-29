function d(arg) {

    document.write(arg + "<br>");

}



/*



------------ LAISSEZ LIBRE COURS A VOTRE IMAGINATION POUR LE TEXTE --------------- 

 

Exercice : Oyé Oyé ! Bienvenue dans votre JDR Javascript, vous etes capable

de creer divers Personnages (monstres, guerriers, mages, chasseurs, voleurs)

avec différentes caractéristiques (pseudo, sante,niveau,points d'experiences, classe, 

race, armes).

Une petite présentation de votre héro est nécéssaire.

Votre Héro se retrouve dans divers situations telle que

le combat ! :-O Il est donc capable de se défendre en attaquant ses adversaires,

il inflige des dégats proportionnellement à sa force de combat qui elle dépendera de 

l'arme utilisée et donc les points de vie de l'adversaire baisse en conséquence ;-). 



A chaque fois que votre Champion sort vainqueur d'un combat ^_^ il gagne 50 points 

d'experiences, et prend un niveau chaque 100 points d'experiences. A chaque fois que votre

héro gagne un niveau, pour atteindre le niveau suivant l'experience est augmenté de 25%.



Par exemple si vous souhaitez creer un magicien, celui ci est capable de faire des attaques 

magiques qui ne font pas les mêmes dégats qu'un guerrier et son épée ou bien un chasseur 

et son arc.

Un magicien possède également le pouvoir de se soigner et donc si il souhaite 

soigner un allié il le fera et lui rendra 50% de sa vie. Votre héro n'est pas immortel, 

il subit des dégats lors de ses périples, vous pouvez lui faire prendre des potions de vie 

qui lui redonne 20% de sa vie ou bien le booster avec des potions de force qui 

augmente sa force de 15%. Bonne chance :).



*/



function Player(pseudo,race,pdv,attaque,lvl,arme,sort,potion){

    this.pseudo = pseudo,

    this.race = race,

    this.pdv = pdv,

    this.attaque = attaque,

    this.lvl = lvl,

    this.arme = arme,

    this.sort = sort,

    this.potion = potion;

}



var iop = new Player("Sir Pinpin", "Iop", 200, 25, 1, "Epée");

var cra = new Player("Roger", "Crâ", 150, 25, 1, "Arc");

var sacri = new Player("Boursin", "Sacrieur", 300, 30, 1, "Tête");

var eni = new Player("Clochette", "Eniripsa", 125, 20, 1, "Bague ", "Soins");



d("PLAYER 1 : <br><br> Nom : " + iop.pseudo + "<br> Race : " + iop.race + "<br> Points de vie : " + iop.pdv + "<br> Attaque : " + iop.attaque + "<br> Level : " + iop.lvl + "<br> Arme : " + iop.arme);

d("Les Iops sont des guerriers fonceurs et sans reproche ! Une chose est sûre : les Iops savent faire parler les armes. D'ailleurs, se retrouver pris dans une bagarre au moins une fois par jour est pour eux un signe de bonne santé.");



d("<br>");



d("PLAYER 2 : <br><br> Nom : " + cra.pseudo + "<br> Race : " + cra.race + "<br> Points de vie : " + cra.pdv + "<br> Attaque : " + cra.attaque + "<br> Level : " + cra.lvl + "<br> Arme : " + cra.arme);

d("Les Crâs sont des archers aussi fiers que précis ! Ils font des alliés précieux contre les adeptes de la mêlée franche. Restant à distance, décochant leur flèches dans le moindre orifice laissé sans surveillance, ils ne laissent aucun répit à leurs adversaires !")



d("<br>");



d("PLAYER 3 : <br><br> Nom : " + sacri.pseudo + "<br> Race : " + sacri.race + "<br> Points de vie : " + sacri.pdv + "<br> Attaque : " + sacri.attaque + "<br> Level : " + sacri.lvl+ "<br> Arme : " + sacri.arme);

d("Les Sacrieurs n'ayant pas peur de recevoir des coups, ni de s'exposer aux blessures, ils seront souvent en première ligne, prêts à verser le premier sang ! Le Sacrieur est vraiment le compagnon idéal pour vos longues soirées guerrières...")



d("<br>");



d("PLAYER 4 : <br><br> Nom : " + eni.pseudo + "<br> Race : " + eni.race + "<br> Points de vie : " + eni.pdv + "<br> Attaque : " + eni.attaque + "<br> Level : " + eni.lvl + "<br> Arme : " + eni.arme + "<br> Sort : " + eni.sort);

d("Les Eniripsas sont des guérisseurs qui soignent d'un simple mot. Ils utilisent parfois le pourvoir de la parole pour soulager les souffrances de leurs alliés, mais parfois aussi pour blesser leurs ennemis. Certains Eniripsa sont même devenus de véritables arpenteurs du verbe !")



d("<br>");