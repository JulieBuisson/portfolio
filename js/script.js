
document.querySelector("#back-door").onclick = function (){
    
    let pin = Math.floor(1000 + Math.random() * 9000);

    pin -= 1;

    console.log("Votre code d'accès est :", pin);
    console.log("Merci pour votre visite madame @root");

    let pin_prompt = Number(prompt("Veuillez rentrer le mot de passe :"));

    if(pin_prompt === pin) {
        let url = "";

        if(window.location.href.includes("?")) {
            console.log("lol");
            url += window.location.href + "&";
        } else {
            url += window.location.href + "?";
        }

        url += "admin=connexion";

        window.location.href = url; 
    }

}