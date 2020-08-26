// JavaScript File
var kaarten= [ 
    [1, "rood", "cirkel"],[2, "rood", "cirkel"],[3, "rood", "cirkel"],[4, "rood", "cirkel"],
    [1, "groen", "cirkel"],[2, "groen", "cirkel"],[3, "groen", "cirkel"],[4, "groen", "cirkel"],
    [1, "blauw", "cirkel"],[2, "blauw", "cirkel"],[3, "blauw", "cirkel"],[4, "blauw", "cirkel"],
    [1, "zwart", "cirkel"],[2, "zwart", "cirkel"],[3, "zwart", "cirkel"],[4, "zwart", "cirkel"],
    [1, "rood", "vierkant"],[2, "rood", "vierkant"],[3, "rood", "vierkant"],[4, "rood", "vierkant"],
    [1, "groen", "vierkant"],[2, "groen", "vierkant"],[3, "groen", "vierkant"],[4, "groen", "vierkant"],
    [1, "blauw", "vierkant"],[2, "blauw", "vierkant"],[3, "blauw", "vierkant"],[4, "blauw", "vierkant"],
    [1, "zwart", "vierkant"],[2, "zwart", "vierkant"],[3, "zwart", "vierkant"],[4, "zwart", "vierkant"],
    [1, "rood", "driehoek"],[2, "rood", "driehoek"],[3, "rood", "driehoek"],[4, "rood", "driehoek"],
    [1, "groen", "driehoek"],[2, "groen", "driehoek"],[3, "groen", "driehoek"],[4, "groen", "driehoek"],
    [1, "blauw", "driehoek"],[2, "blauw", "driehoek"],[3, "blauw", "driehoek"],[4, "blauw", "driehoek"],
    [1, "zwart", "driehoek"],[2, "zwart", "driehoek"],[3, "zwart", "driehoek"],[4, "zwart", "driehoek"],

];
var vorm = ["vierkant", "driehoek", "cirkel"];
var kleur =["rood", "blauw", "groen", "zwart"];

function verander(elem) {
    var rand = elem.style.borderWidth;
    if (rand == "3px") {
        elem.style.borderWidth = "1px";
    } else {
        elem.style.borderWidth = "3px";
    }
}
function schud(rij) {
    var j, x, i;
    for (i = rij.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = rij[i];
        rij[i] = rij[j];
        rij[j] = x;
    }
    return rij;
}
function start() {
    document.getElementById("opdracht1").style.display= "block";
    toonKaarten();
}

function toonKaarten() {
    schud(kaarten);
    document.getElementById("resultaat").innerHTML ="";
    for(var i=0;i<kaarten.length;i++) {
        document.getElementById("kaart"+ (i+1)).innerHTML = "";
        document.getElementById("kaart"+ (i+1)).style.borderWidth="1px";
    }   

    for(var i=0;i<kaarten.length;i++) {
        // [1, "zwart", "driehoek"],
        var kleurK = kaarten[i][1];
        var vormK= kaarten[i][2];
        var aantalK= kaarten[i][0];
        for (var j=1;j<=aantalK;j++) {
            document.getElementById("kaart"+ (i+1)).innerHTML +="<img src='img/" + kleurK + vormK + ".png'>";
        }
    }   
}
function opdracht1() {
    //klik alle kaarten met 1 of meerdere rode symbolen
    var fout=false;
    for(var i=0;i<kaarten.length;i++) {
        var rand = document.getElementById("kaart" + (i+1)).style.borderWidth;
        if (kaarten[i][1] == "rood" ) {
            if (rand != "3px" ) {
                fout=true;
            }
        } else {
            if (rand == "3px" ) {
                fout=true;
            }
        }
    }
    if (fout) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML ="er zit een fout in";
    } else {
        document.getElementById("opdracht1").style.display= "none";
        document.getElementById("opdracht2").style.display= "block";
        toonKaarten();
    }
}

function opdracht2() {
    //klik alle blauwe kaarten met 1 element
    var fout=false;
    for(var i=0;i<kaarten.length;i++) {
        var rand = document.getElementById("kaart" + (i+1)).style.borderWidth;
        if (kaarten[i][1] == "blauw" && kaarten[i][0] ==1 ) {
            if (rand != "3px" ) {
                fout=true;
                console.log(i);
            }
        } else {
            if (rand == "3px" ) {
                console.log(i);
                fout=true;
            }
        }
    }
    if (fout) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML ="er zit een fout in";
    } else {
        document.getElementById("opdracht2").style.display= "none";
        document.getElementById("opdracht3").style.display= "block";
        toonKaarten();
    }
}

function opdracht3() {
    //klik alle groene kaarten en alle kaarten met 2 cirkels
    var fout=false;
    for(var i=0;i<kaarten.length;i++) {
        var rand = document.getElementById("kaart" + (i+1)).style.borderWidth;
        if (kaarten[i][1] == "groen" || (kaarten[i][0] == 2 && kaarten[i][2] =="cirkel") ) {
            if (rand != "3px" ) {
                fout=true;
                console.log(i);
            }
        } else {
            if (rand == "3px" ) {
                fout=true;
                console.log(i);
            }
        }
    }
    if (fout) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML ="er zit een fout in. Probeer het nog een keer.";
    } else {
        document.getElementById("opdracht3").style.display= "none";
        document.getElementById("opdracht4").style.display= "block";
        toonKaarten();
    }
}

function opdracht4() {
    //klik alle zwarte kaarten die geen 3 elementen hebben
    var fout=false;
    for(var i=0;i<kaarten.length;i++) {
        var rand = document.getElementById("kaart" + (i+1)).style.borderWidth;
        if (kaarten[i][1] == "zwart" && kaarten[i][0] != 3 ) {
            if (rand != "3px" ) {
                fout=true;
            }
        } else {
            if (rand == "3px" ) {
                fout=true;
                console.log(i);
            }
        }
    }
    if (fout) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("aantalSterren").innerHTML = aantalSterren;

    } else {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        updateSterren(aantalSterren);
        document.getElementById("nextLevel").style.display="block";
    }
}
