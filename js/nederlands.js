// JavaScript File
function controleren () {
    var fout=false;
    var woordenLijst = [
        ["De", "Het"],
        ["geliketete","gelikete"],
        ["29 jarige","29-jarige"],
        ["reclameindustrie","reclame-industrie"],
        ["doordat","nadat"],
        ["jenner","Jenner"],
        ["betaalt","betaald"],
        ["vergrooten","vergroten"],
        ["word","wordt"],
        ["organic","organisch"]
        ];
    var resultaatElem = document.getElementById("resultaat");
    resultaatElem.innerHTML = "";
    for(var i=1;i<= 10; i++ ){
        var woordF= document.getElementById("woord" + i + "a").value;
        var woordG= document.getElementById("woord" + i + "b").value;
        // woordF = woordF.toLowerCase();
        // woordG = woordG.toLowerCase();
        var gevonden=false;
        if (woordF=="") {
            resultaatElem.innerHTML += "Woord " + i +  " is niet ingevuld. Er zijn toch echt 10 fouten.<br>";
            fout =true;
        } else {
            for(var j=0;j<woordenLijst.length;j++) {
                if (woordF == woordenLijst[j][0]) {
                    gevonden = true;
                    if (woordG == woordenLijst[j][1]) {
                        document.getElementById("woord" + i + "a").style.backgroundColor = "#33ff33";
                        document.getElementById("woord" + i + "b").style.backgroundColor = "#33ff33";
                        //woord goed verbeterd. 
                    } else {
                        resultaatElem.innerHTML += "woord "+ i + " is niet goed verbeterd. Probeer het nog een keer.<br>";
                        document.getElementById("woord" + i + "b").style.backgroundColor = "red";
                        //
                        fout=true;
                    }
                }
                
            }
            if (!gevonden) {
                resultaatElem.innerHTML += "woord "  +  i +  " is niet correct. Probeer het nog een keer.<br>";
                document.getElementById("woord" + i + "a").style.backgroundColor = "red";

                fout =true;
            }
        }            
    }
    if (fout) {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("aantalSterren").innerHTML = aantalSterren;
        if (aantalSterren <=0 ) {
            //spel afgelopen
            document.getElementById("controleer").disabled=true;
            document.getElementById("resultaat").innerHTML = "Je hebt geen sterren meer over."
            setTimeout(slaSterrenOp, 3000)
        }
        if (aantalSterren ==3) {
            document.getElementById("extra").style.display = "block";
            document.getElementById("opgeven").style.display = "block";

        }
    } else {
        document.getElementById("resultaat").innerHTML = "Je hebt alle fouten gevonden."
            
        setTimeout(slaSterrenOp, 3000)

    }
}
function opgeven() {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 2;
        if (aantalSterren >= 0) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("aantalSterren").innerHTML = aantalSterren;
        setTimeout(slaSterrenOp, 1000)
    
}
function extraHulp() {
    var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
    if (aantalSterren >= 0) {
        document.getElementById("aantalSterren").innerHTML = aantalSterren;
    }
    if (aantalSterren <=0 ) {
        //spel afgelopen
        document.getElementById("controleer").disabled=true;
        document.getElementById("resultaat").innerHTML = "Je hebt geen sterren meer over."
        setTimeout(slaSterrenOp, 3000)
    }
    var tekst = "<p><span class=rood>De</span> mysterie rond het 'Instagram-ei', dat vorige maand online kwam ";
    tekst +="en de meest <span class=rood>geliketete</span> ";
    tekst +="Instagram-foto werd, is opgelost. Bedenker ervan is Chris Godfrey, een <span class=rood>29 jarige</span> man uit Londen.";   
    tekst +=" Hij is werkzaam in de <span class=rood>reclameindustrie</span>.</p>"; 
    tekst +="<p>Godfrey kwam op het idee <span class=rood>doordat</span> hij had gezien dat een foto van beroemdheid Kylie ";
    tekst +="Jenner de meeste likes op Instagram had, zegt hij in The New York Times. 'Kan iets ";
    tekst +="universeels en simpels als een ei goed genoeg zijn om dat record te breken?', vroeg hij ";
    tekst +="zich af.</p><p>Negen dagen later was dat gelukt. Inmiddels heeft de foto 52 miljoen likes ";
    tekst +="- die van <span class=rood>jenner</span> heeft er 19 miljoen.</p><p>Veel geruchten gingen de ronde over de oorzaak ";
    tekst +="van de populariteit van het ei. Zo zouden influencers <span class=rood>betaalt</span> zijn om het onder de aandacht ";
    tekst +="te brengen. Onzin, zegt Godfrey. De groei van het aantal likes ging '<span class=rood>organic</span>'. </p>";
    tekst +="<p>Godfrey zet 'Eugene', zoals het ei door fans genoemd <span class=rood>word</span>, in om bewustwording rond ";
    tekst +="geestelijke gezondheid te <span class=rood>vergrooten</span>. Op Instagram is een filmpje verschenen waarin het ";
    tekst +="ei openbreekt 'door de druk van sociale media'. 'Worstel je ook', zegt het ei, ";
    tekst +="'praat dan met iemand.'</p>";
    document.getElementById("tekst").innerHTML = tekst;

}

function slaSterrenOp() {
    var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
    updateSterren(aantalSterren);

}