// JavaScript File
function start() {
        document.getElementById("opdracht1").style.display="block";
}
function opdracht1a() {
    antwoord = document.getElementById("antwoord1a" ).value;
    if (antwoord != "S2Rood") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "Dit is niet goed. Probeer het nog eens. Let goed op hoofdletters en kleine letters";
    } else {
        document.getElementById("resultaat").innerHTML= "Opdracht 1a heb je goed gedaan";
        document.getElementById("opdracht1a").style.display="none";
        document.getElementById("opdracht1b").style.display="block";
    }
}
function opdracht1b() {
    antwoord = document.getElementById("antwoord1b" ).value;
    if (antwoord != "S3Groen") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "Dit is niet goed. Probeer het nog eens. Let goed op hoofdletters en kleine letters";
    } else {
        document.getElementById("resultaat").innerHTML= "Opdracht 1b heb je goed gedaan";
        document.getElementById("opdracht1b").style.display="none";
        document.getElementById("opdracht1c").style.display="block";
    }
}
function opdracht1c() {
    antwoord = document.getElementById("antwoord1c" ).value;
    if (antwoord != "S4Oranje") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "Dit is niet goed. Probeer het nog eens. Let goed op hoofdletters en kleine letters";
    } else {
        document.getElementById("resultaat").innerHTML= "Opdracht 1c heb je goed gedaan";
        document.getElementById("opdracht1").style.display="none";
        document.getElementById("opdracht1c").style.display="none";
        document.getElementById("opdracht2").style.display="block";
    }
}
function opdracht2() {
    var id = document.getElementById("invoerId2").value;
    var kleur = document.getElementById("kleur2").value;
    if (id !="S1Rood") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (kleur != "red") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de kleur moet in het engels. probeer het nog eens";
    } else {
        document.getElementById(id).style.backgroundColor = kleur;
        document.getElementById("invoerId2").value = "";
        document.getElementById("kleur2").value ="";
        document.getElementById("resultaat").innerHTML = "Opdracht 2 heb je goed gedaan";
        document.getElementById("opdracht2").style.display = "none";
        document.getElementById("opdracht3").style.display = "block";
        
    } 
}

function opdracht3() {
    var id = document.getElementById("invoerId3").value;
    var kleur = document.getElementById("kleur3").value;
    if (id !="S3Rood") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (kleur != "red") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de kleur moet in het engels. probeer het nog eens";
    } else {
        document.getElementById(id).style.backgroundColor = kleur;
        document.getElementById("invoerId3").value = "";
        document.getElementById("kleur3").value ="";
        document.getElementById("resultaat").innerHTML = "Opdracht 3 heb je goed gedaan";
        document.getElementById("opdracht3").style.display = "none";
        document.getElementById("opdracht4").style.display = "block";
    } 
}

function opdracht4() {
    var id1 = document.getElementById("invoerId4a").value;
    var kleur1 = document.getElementById("kleur4a").value;
    var id2 = document.getElementById("invoerId4b").value;
    var kleur2 = document.getElementById("kleur4b").value;
    if (id1 !="S2Groen" && id1 !="S4Groen" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (id2 !="S2Groen" && id2 !="S4Groen" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (id1==id2) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de namen moeten wel verschillend zijn. probeer het nog eens";
    } else if (kleur1 != "green" || kleur2 != "green") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de kleur moet in het engels. probeer het nog eens";
    } else {
        if (kleur1=="green") {kleur1="#0FFC0A";}
        if (kleur2=="green") {kleur2="#0FFC0A";}
        
        document.getElementById(id1).style.backgroundColor = kleur1;
        document.getElementById(id2).style.backgroundColor = kleur2;
        document.getElementById("invoerId4a").value = "";
        document.getElementById("kleur4a").value ="";
        document.getElementById("invoerId4b").value = "";
        document.getElementById("kleur4b").value ="";
        document.getElementById("resultaat").innerHTML = "Opdracht 4 heb je goed gedaan";
        document.getElementById("opdracht4").style.display = "none";
        document.getElementById("opdracht5").style.display = "block";
    } 
}
function opdracht5() {
    var id1 = document.getElementById("invoerId5a").value;
    var kleur1 = document.getElementById("kleur5a").value;
    var id2 = document.getElementById("invoerId5b").value;
    var kleur2 = document.getElementById("kleur5b").value;
    if (id1 !="S1Rood") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (id2 !="S1Groen" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam is niet goed. probeer het nog eens";
    } else if (kleur1 != "black" || kleur2 != "green") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de kleur is niet goed. Denk er om dat je een lamp eerst op zwart moet zetten. probeer het nog eens";
    } else {
        document.getElementById(id1).style.backgroundColor = kleur1;
        document.getElementById(id2).style.backgroundColor = "#0FFC0A";
        document.getElementById("invoerId5a").value = "";
        document.getElementById("kleur5a").value ="";
        document.getElementById("invoerId5b").value = "";
        document.getElementById("kleur5b").value ="";
        document.getElementById("resultaat").innerHTML = "Opdracht 5 heb je goed gedaan";
        document.getElementById("opdracht5").style.display = "none";
        document.getElementById("opdracht6").style.display = "block";
    } 
}
var veranderId=[];
var veranderKleur=[];
var interval;
function opdracht6() {
    var fout=false
    var id1 = document.getElementById("invoerId6a").value;
    var kleur1 = document.getElementById("kleur6a").value;
    var id2 = document.getElementById("invoerId6b").value;
    var kleur2 = document.getElementById("kleur6b").value;
    var id3 = document.getElementById("invoerId6c").value;
    var kleur3 = document.getElementById("kleur6c").value;
    var id4 = document.getElementById("invoerId6d").value;
    var kleur4 = document.getElementById("kleur6d").value;
    if (id1 !="S2Groen") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam in de eerste instructie is niet goed. probeer het nog eens";
        fout=true;
    } else if (id2 !="S2Oranje" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam in de tweede inscructie is niet goed. probeer het nog eens";
        fout=true;
    } else if (id3 !="S2Oranje" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam in de derde instructie is niet goed. probeer het nog eens";
        fout=true;
    } else if (id4 !="S2Rood" ) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de naam in de vierde instructie is niet goed. probeer het nog eens";
        fout=true;
    }

    if (kleur1 != "black") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML = "de kleur in de eerste instructie is niet goed. Denk erom dat een lamp eerst op zwart moet zetten. Probeer het nog eens";
        fout=true;
    } else if (kleur2 != "orange") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML =  "de kleur in de tweede instructie is niet goed. probeer het nog eens";
        fout=true;
    } else if (kleur3 != "black") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML =  "de kleur in de derde instructie is niet goed. Je moet een lamp eerst op zwart zetten voordat je een andere lamp aandoet. Probeer het nog eens";
        fout=true;
    } else if (kleur4 != "red") {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML =  "de kleur in de vierde instructie is niet goed. probeer het nog eens";
        fout=true;
    }   
        
    if (!fout) {
        document.getElementById("resultaat").innerHTML = "Super goed gedaan.";
        veranderId.push(id1);
        veranderKleur.push(kleur1);
        veranderId.push(id2);
        veranderKleur.push("#ffcb00");
        veranderId.push(id3);
        veranderKleur.push(kleur3);
        veranderId.push(id4);
        veranderKleur.push(kleur4);
        interval = setInterval(veranderKleurF, 1000);
    } 
}
function opdracht6a() {
    document.getElementById("resultaat").innerHTML = "";
    document.getElementById("S1Rood").style.backgroundColor = "black";
    document.getElementById("S1Groen").style.backgroundColor = "#0FFC0A";
    document.getElementById("S3Rood").style.backgroundColor = "black";
    document.getElementById("S3Groen").style.backgroundColor = "#0FFC0A";
    document.getElementById("opdracht6").style.display = "none";
    document.getElementById("nextLevel").style.display = "block";
    document.getElementById("opdracht7").style.display = "block";
    document.getElementById("resultaat").innerHTML = "";        
}
function gaVerder() {
    var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
    updateSterren(aantalSterren);
}

var index=0;
function veranderKleurF() {
    if (index >= veranderId.length) {
        clearInterval(interval);
        document.getElementById("resultaat").innerHTML = "Super goed gedaan. <a href=# onclick='opdracht6a()'>Klik hier</a> om de Steve Jobssingel te laten rijden";
    } else {
        document.getElementById(veranderId[index]).style.backgroundColor = veranderKleur[index];
        veranderId2 = veranderId[index].replace("2","4"); 
        document.getElementById(veranderId2).style.backgroundColor = veranderKleur[index];
        index++;
    }
}
function zetTerug() {
    document.getElementById("S1Rood").style.backgroundColor = "red";
    document.getElementById("S1Groen").style.backgroundColor = "black";
    document.getElementById("opdracht6a").style.display="block";
} 
