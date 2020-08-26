// JavaScript File
function controleerCode() {
    var woord =  [document.getElementById("woord1").value, 
    document.getElementById("woord2").value,
    document.getElementById("woord3").value,
    document.getElementById("woord4").value];
    var tekst = woord.join(" ");
    if (tekst == "you are almost there") {
        // goed
        //opslaan sterren!!!
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        updateSterren(aantalSterren);

        document.getElementById("resultaat").innerHTML = "goed";
        document.getElementById("checkIt").disabled=true;

    } else {
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }

        document.getElementById("resultaat").innerHTML = "je hebt de code niet gekraakt. probeer het nog eens.";
    }
}

function start() {
    document.getElementById("rechts").style.display ="block"
    document.getElementById("start").disabled=true;
    
}
