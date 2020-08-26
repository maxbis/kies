    function kopieerTekst(){
        var copyText ="N";
        copyText += document.getElementById("Ngraden").value;
        copyText += "°";
        copyText += document.getElementById("Nmin").value;
        copyText += "'";
        copyText += document.getElementById("Nsec").value;
        copyText += '"';
        copyText +=" E";
        copyText += document.getElementById("Egraden").value;
        copyText += "°";
        copyText += document.getElementById("Emin").value;
        copyText += "'";
        copyText += document.getElementById("Esec").value;
        copyText += '"';
        
        var output = document.getElementById("GPS");
        output.value=copyText;
        
        output.select();

        document.execCommand("copy");
    }
    function checkAdres() {
        var adres = document.getElementById("straat").value;
        adres = adres.toLowerCase();
        huisnummer = document.getElementById("huisnummer").value;
        postcode = document.getElementById("postcode").value;
        postcode = postcode.toLowerCase();
        plaats = document.getElementById("plaats").value;
        plaats = plaats.toLowerCase();
        if (adres == "maalderij" && huisnummer == "37" && postcode =="1185zc" && plaats=="amstelveen") {
            document.getElementById("resultaat").innerHTML = "Je hebt de USB stick gevonden";
            var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
            updateSterren(aantalSterren);
            document.getElementById("nextLevel").style.display = "block";
        } else {
            var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;

            if (aantalSterren >= 0 ) {
                document.getElementById("aantalSterren").innerHTML = aantalSterren;
            }
            document.getElementById("resultaat").innerHTML = "Helaas je hebt niet het juiste adres. Probeer het nog een keer en gebruik google streetview als hulpmiddel.";
            
        }
    }
