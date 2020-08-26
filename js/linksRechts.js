// JavaScript File
var afbeeldingen = [["chrome.png", "software"],
                ["minecraft.png", "software"],
                ["word.png", "software"],
                ["powerpoint.png", "software"],
                ["monitor.jpg", "hardware"],
                ["windows10.jpg", "software"],
                ["muis.jpg", "hardware"],
                ["processor.jpg", "hardware"],
                ["sdcard.jpg", "hardware"],
                ["usbstick.jpg", "hardware"],
                ["vga.jpg", "hardware"]];
var imgIndex =0;
function start() {
    imgIndex=0;
    schud(afbeeldingen);
    document.getElementById("midden").innerHTML = "<img id=afbeelding src=logo/" + afbeeldingen[imgIndex][0] + ">";
    document.getElementById("start").disabled=true;
}
function sorteer(kant) {
    imgKant = afbeeldingen[imgIndex][1];
    if (kant== imgKant) {
        //goed
        document.getElementById("resultaat").innerHTML= "goed";
    } else {
        //fout
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
        document.getElementById("resultaat").innerHTML= "fout";
        
    }
    //volgende plaatje
    imgIndex++;
    if (imgIndex < afbeeldingen.length) {
        document.getElementById("midden").innerHTML = "<img id=afbeelding src=logo/" + afbeeldingen[imgIndex][0] + ">";
    }  else {
        document.getElementById("resultaat").innerHTML ="spel afgelopen";
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        console.log(aantalSterren);
        updateSterren(aantalSterren);

        document.getElementById("nextLevel").style.display= "block";
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

