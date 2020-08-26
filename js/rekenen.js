// JavaScript File
function start() { 
    document.getElementById("links").style.display= "block";
    document.getElementById("rechts").style.display= "block";
    
    document.getElementById("start").disabled=true;
    
}    
function controleer1() {
    antwoord = document.getElementById("antwoord").value;
    if (antwoord == 2) {
        document.getElementById("resultaat").innerHTML = "goed gedaan";
        //laad naar 2 seconden rekenen2
        document.getElementById("kladpapier").value="";
        setTimeout(laadRekenen2, 2000);
        
    } else {
        document.getElementById("resultaat").innerHTML = "probeer het nog eens of vraag een hint";
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        if (aantalSterren>0) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren-1;
        }    
        
    }
}
function laadRekenen2() {
    document.getElementById("links1").style.display="none";
    document.getElementById("links2").style.display="block";
    volgendeOpdracht();
}

function init() {
    document.getElementById("resultaat").innerHTML = "";
    document.getElementById("antwoord2").value = "";
    
    for (var r=1;r<=5;r++) {
        for(var k=1;k<=5;k++) {
            document.getElementById("r" + r + "k"+ k).style.border="";
        }
    }
}
var opdracht =0;
function volgendeOpdracht() {
    init();
    opdracht++
    switch (opdracht) {
        case 1:
            maakVierkant1();
            break;
        case 2 :
            maakVierkant2();break;
        case 3: 
            maakVierkant3();break;
        case 4:
            document.getElementById("kladpapier").value="";
            document.getElementById("links2").style.display="none";
            document.getElementById("links3").style.display="block";
            break;
    }
    
}
function maakVierkant2(){
    document.getElementById("r1k1").style.borderLeft = "1px solid black";
    document.getElementById("r2k1").style.borderLeft = "1px solid black";
    document.getElementById("r3k1").style.borderLeft = "1px solid black";
    document.getElementById("r4k1").style.borderLeft = "1px solid black";
    document.getElementById("r5k1").style.borderLeft = "1px solid black";
    document.getElementById("r1k1").style.borderTop  = "1px solid black";
    document.getElementById("r1k2").style.borderTop  = "1px solid black";
    document.getElementById("r1k3").style.borderTop  = "1px solid black";
    document.getElementById("r1k4").style.borderTop  = "1px solid black";
    document.getElementById("r1k5").style.borderTop  = "1px solid black";
    document.getElementById("r1k5").style.borderRight= "1px solid black";
    document.getElementById("r2k5").style.borderRight= "1px solid black";
    document.getElementById("r3k5").style.borderRight= "1px solid black";
    document.getElementById("r4k5").style.borderRight= "1px solid black";
    document.getElementById("r5k5").style.borderRight= "1px solid black";
    document.getElementById("r5k1").style.borderBottom= "1px solid black";
    document.getElementById("r5k2").style.borderBottom= "1px solid black";
    document.getElementById("r5k3").style.borderBottom= "1px solid black";
    document.getElementById("r5k4").style.borderBottom= "1px solid black";
    document.getElementById("r5k5").style.borderBottom= "1px solid black";

    document.getElementById("r1k1").style.borderRight= "1px solid black";
    document.getElementById("r1k1").style.borderBottom= "1px solid black";
    document.getElementById("r5k5").style.borderTop= "1px solid black";
    document.getElementById("r5k5").style.borderLeft= "1px solid black";

    document.getElementById("r2k2").style.borderLeft= "1px solid black";
    document.getElementById("r2k2").style.borderTop= "1px solid black";
    document.getElementById("r2k3").style.borderTop= "1px solid black";
    document.getElementById("r2k4").style.borderTop= "1px solid black";
    document.getElementById("r2k4").style.borderRight    = "1px solid black";
    document.getElementById("r3k2").style.borderLeft= "1px solid black";
    document.getElementById("r3k4").style.borderRight = "1px solid black";
    document.getElementById("r4k2").style.borderLeft= "1px solid black";
    document.getElementById("r4k4").style.borderRight = "1px solid black";
    document.getElementById("r4k2").style.borderBottom= "1px solid black";
    document.getElementById("r4k3").style.borderBottom= "1px solid black";
    document.getElementById("r4k4").style.borderBottom= "1px solid black";


}

function maakVierkant1(){
    document.getElementById("r1k1").style.borderLeft = "1px solid black";
    document.getElementById("r2k1").style.borderLeft = "1px solid black";
    document.getElementById("r3k1").style.borderLeft = "1px solid black";
    document.getElementById("r4k1").style.borderLeft = "1px solid black";
    document.getElementById("r1k1").style.borderTop  = "1px solid black";
    document.getElementById("r1k2").style.borderTop  = "1px solid black";
    document.getElementById("r1k3").style.borderTop  = "1px solid black";
    document.getElementById("r1k4").style.borderTop  = "1px solid black";
    document.getElementById("r1k4").style.borderRight= "1px solid black";
    document.getElementById("r2k4").style.borderRight= "1px solid black";
    document.getElementById("r3k4").style.borderRight= "1px solid black";
    document.getElementById("r4k4").style.borderRight= "1px solid black";
    document.getElementById("r4k1").style.borderBottom= "1px solid black";
    document.getElementById("r4k2").style.borderBottom= "1px solid black";
    document.getElementById("r4k3").style.borderBottom= "1px solid black";
    document.getElementById("r4k4").style.borderBottom= "1px solid black";

    document.getElementById("r1k2").style.borderRight= "1px solid black";
    document.getElementById("r2k2").style.borderRight= "1px solid black";
    document.getElementById("r3k2").style.borderRight= "1px solid black";
    document.getElementById("r4k2").style.borderRight= "1px solid black";
    document.getElementById("r2k1").style.borderBottom= "1px solid black";
    document.getElementById("r2k2").style.borderBottom= "1px solid black";
    document.getElementById("r2k3").style.borderBottom= "1px solid black";
    document.getElementById("r2k4").style.borderBottom= "1px solid black";
    
    
    
}
function maakVierkant3(){
    document.getElementById("r1k1").style.borderLeft = "1px solid black";
    document.getElementById("r2k1").style.borderLeft = "1px solid black";
    document.getElementById("r2k2").style.borderLeft = "1px solid black";
    document.getElementById("r2k4").style.borderLeft = "1px solid black";
    document.getElementById("r3k1").style.borderLeft = "1px solid black";
    document.getElementById("r3k1").style.borderLeft = "1px solid black";
    document.getElementById("r3k2").style.borderLeft = "1px solid black";
    document.getElementById("r3k3").style.borderLeft = "1px solid black";
    document.getElementById("r3k4").style.borderLeft = "1px solid black";
    document.getElementById("r3k5").style.borderLeft = "1px solid black";
    document.getElementById("r4k2").style.borderLeft = "1px solid black";
    document.getElementById("r4k3").style.borderLeft = "1px solid black";
    document.getElementById("r5k3").style.borderLeft = "1px solid black";
    document.getElementById("r1k1").style.borderTop  = "1px solid black";
    document.getElementById("r1k2").style.borderTop  = "1px solid black";
    document.getElementById("r1k3").style.borderTop  = "1px solid black";
    document.getElementById("r2k2").style.borderTop  = "1px solid black";
    document.getElementById("r2k3").style.borderTop  = "1px solid black";
    document.getElementById("r2k4").style.borderTop  = "1px solid black";
    document.getElementById("r3k3").style.borderTop  = "1px solid black";
    document.getElementById("r3k4").style.borderTop  = "1px solid black";
    document.getElementById("r3k5").style.borderTop  = "1px solid black";
    document.getElementById("r1k3").style.borderRight = "1px solid black";
    document.getElementById("r2k4").style.borderRight = "1px solid black";
    document.getElementById("r3k5").style.borderRight = "1px solid black";
    document.getElementById("r4k4").style.borderRight = "1px solid black";
    document.getElementById("r4k5").style.borderRight = "1px solid black";
    document.getElementById("r5k5").style.borderRight = "1px solid black";
    document.getElementById("r3k1").style.borderBottom = "1px solid black";
    document.getElementById("r3k2").style.borderBottom = "1px solid black";
    document.getElementById("r3k3").style.borderBottom = "1px solid black";
    document.getElementById("r4k2").style.borderBottom = "1px solid black";
    document.getElementById("r4k3").style.borderBottom = "1px solid black";
    document.getElementById("r4k4").style.borderBottom = "1px solid black";
    document.getElementById("r5k3").style.borderBottom = "1px solid black";
    document.getElementById("r5k4").style.borderBottom = "1px solid black";
    document.getElementById("r5k5").style.borderBottom = "1px solid black";


}

function controleer2(){
	var waarde = parseInt(document.getElementById("antwoord2").value);
    switch (opdracht) {
        case 1:
            var antwoord=5;break;
        case 2 :
            var antwoord=6;break;
        case 3: 
            var antwoord = 8;break;
    }
    
	if (waarde == antwoord) {
		document.getElementById("resultaat").innerHTML = "Het antwoord is goed!";
	    setTimeout(volgendeOpdracht, 1000);
	    
	}else{
		document.getElementById("resultaat").innerHTML = "Het antwoord is helaas fout :( probeer het nog een keer";
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        if (aantalSterren>0) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren-1;
        }
    }
}

function check(invoer, verwacht) {
    if (invoer==verwacht) {
        return true;
    } else {
        return false;
    }
}
function controleer3() {
    var antwoord = [0,5,10, 13, 64, 25];
    var error = false;
    for (var i=1; i<=5; i++) {
        var getal = document.getElementById("getal"+i).value;
        var controleGetal = antwoord[i];
        if (!check(getal, controleGetal)) {
            document.getElementById("resultaat").innerHTML = "opdracht " + i + " is fout. probeer het nog eens";
            error = true;
            var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
            if (aantalSterren>0) {
                document.getElementById("aantalSterren").innerHTML = aantalSterren-1;
            }
            break;
        } 
    }
    if (!error) {
        document.getElementById("resultaat").innerHTML = "helemaal goed!!";
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        updateSterren(aantalSterren)       
        document.getElementById("nextLevel").style.display= "block";
    
        
    }
}