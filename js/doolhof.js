// JavaScript File
//top, right,bottom, left
var doolhof1 = [[1,1,0,0],[1,1,1,1],[1,1,0,1],[1,1,1,1],[1,0,0,1],
                [0,0,1,1],[1,0,1,0],[0,0,1,0],[1,0,1,0],[0,1,1,0],
                [0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],
                [0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],
                [0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]];
var doolhof2 = [[1,1,0,0],[1,1,1,1],[1,1,0,1],[1,1,0,1],[1,1,0,0],
                [0,0,1,1],[1,0,1,0],[0,0,0,0],[1,1,1,0],[0,1,0,1],
                [1,1,1,1],[1,0,0,1],[0,1,1,0],[1,0,1,1],[0,1,1,0],
                [1,0,1,1],[0,0,1,0],[1,0,1,0],[1,0,1,0],[1,0,1,0],
                [0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]];
var doolhof3 = [ [1,1,0,0],[1,0,1,1],[1,1,0,0],[1,0,0,1],[1,1,1,0],
                [0,0,0,1],[1,0,1,0],[0,1,1,0],[0,0,1,1],[1,1,0,0],
                [0,0,1,1],[1,1,0,0],[1,0,0,1],[1,0,1,0],[0,1,0,0],
                [1,0,0,1],[0,1,1,0],[0,0,1,1],[1,1,0,0],[0,1,0,1],
                [0,0,1,1],[1,0,1,0],[1,0,1,0],[0,1,1,0],[0,0,1,1]];
var eindpunt = ["r1k5", "r4k5", "r5k5"];
var pos=0;
function opgeven () {
    document.getElementById("oplossing").disabled = "true";
    document.getElementById("opnieuw").disabled = "true";
    document.getElementById("opgeven").disabled = "true";
    
    //leg het aantalSterren vast
    var aantalSterren = 0;
    updateSterren(aantalSterren)       
    document.getElementById("nextLevel").style.display="block";

}
function opnieuw() {
    for (var i=1;i<=20;i++) {
        document.getElementById("oplos" + i).innerHTML="";
    }  
    document.getElementById("resultaat").innerHTML= "";
    for (rij=1;rij<=5;rij++) {
        for (kolom=1;kolom<=5;kolom++) {
            var veld = "r" + rij + "k" + kolom;
            document.getElementById(veld).innerHTML = "";
        }
    }
    document.getElementById("r1k1").innerHTML = "<div id=robot></div>";
    switch (pos) {
        case 1 : document.getElementById("r1k5").innerHTML = "<div id=uitgang></div>";break;
        case 2 : document.getElementById("r4k5").innerHTML = "<div id=uitgang></div>";break;
        case 3 : document.getElementById("r5k5").innerHTML = "<div id=uitgang></div>";break;
    }
}
function maak(nummer) {
    var rij;
    var kolom;
    var veldId=0
    pos = nummer;
    
    document.getElementById("start").disabled=true;
    document.getElementById("oplossing").disabled=false;
    document.getElementById("opnieuw").disabled=false;
    document.getElementById("opgeven").disabled=false;

    switch (nummer) {
        case 1 : var doolhof = doolhof1;break;
        case 2 : var doolhof = doolhof2;break;
        case 3 : var doolhof = doolhof3;break;
   }
   clearDoolhof();
    for (rij=1;rij<=5;rij++) {
        for (kolom=1;kolom<=5;kolom++) {
            var veld = "r" + rij + "k" + kolom;
            if (doolhof[veldId][0] == 1) { //top
                document.getElementById(veld).style.borderTop = "6px solid black";
            }
            if (doolhof[veldId][1] == 1) { //right
                document.getElementById(veld).style.borderRight = "6px solid black";
            }
            if (doolhof[veldId][2] == 1) { //bottom
                document.getElementById(veld).style.borderBottom = "6px solid black";
            }
            if (doolhof[veldId][3] == 1) { //top
                document.getElementById(veld).style.borderLeft = "6px solid black";
            }
            veldId++;
        }
    }
    document.getElementById("r1k1").innerHTML = "<div id=robot></div>"
    switch (nummer) {
        case 1 : document.getElementById("r1k5").innerHTML = "<div id=uitgang></div>";break;
        case 2 : document.getElementById("r4k5").innerHTML = "<div id=uitgang></div>";break;
        case 3 : document.getElementById("r5k5").innerHTML = "<div id=uitgang></div>";break;
    }
}
function clearDoolhof() {
    for (rij=1;rij<=5;rij++) {
        for (kolom=1;kolom<=5;kolom++) {
            var veld = "r" + rij + "k" + kolom;
            document.getElementById(veld).style.border = "";
        }
    }
    for (rij=1;rij<=5;rij++) {
        for (kolom=1;kolom<=5;kolom++) {
            var veld = "r" + rij + "k" + kolom;
                document.getElementById(veld).innerHTML = "";
        }
    }
}

function allowDrop(ev) {
    ev.preventDefault();
}
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var nodeCopy = document.getElementById(data).cloneNode(true);
    nodeCopy.id = "newId"; /* We cannot use the same ID */
    ev.target.appendChild(nodeCopy);
}
var robotR = 1;
var robotK = 1;
var robothokje = "r"+ robotR + "k" + robotK;
var doolhofId=1;
var elem;
var id=1;
var intervalRobot;

function oplossing() {
    id=1;
    robotR =1;
    robotK =1;
    intervalRobot = setInterval(zetRobot,300);
}    
function zetRobot() {
    var robothokje = "r"+ robotR + "k" + robotK;
    var elem = document.getElementById("oplos" + id).innerHTML;
    if (elem=="") {
        clearInterval(intervalRobot);
        document.getElementById("resultaat").innerHTML = "<h1 class='message'>Er zit een fout in jouw oplossing!</h1>";
        //pas aantal sterren aan.
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;

        if (aantalSterren >= 0 ) {
            document.getElementById("aantalSterren").innerHTML = aantalSterren;
        }
    } else {
        var richting = elem.substr(29,1);
        switch(richting) {
            case "U" :
                robotR--;
                balk = document.getElementById(robothokje).style.borderTop;
                break;
            case "D" :
                robotR++;
                balk = document.getElementById(robothokje).style.borderBottom;
                break;
            case "L" :
                robotK--;
                balk = document.getElementById(robothokje).style.borderLeft;
                break;
            case "R" :
                robotK++;
                balk = document.getElementById(robothokje).style.borderRight;
                break;
        }
        if (balk=="") {
            document.getElementById(robothokje).innerHTML = "";
            robothokje = "r"+ robotR + "k" + robotK;
            document.getElementById(robothokje).innerHTML = "<div id=robot></div>";
            id++;
            elem = document.getElementById("oplos" + id).innerHTML;
        } else {
            clearInterval(intervalRobot);
            document.getElementById("resultaat").innerHTML = "<h1 class='message'>Er zit een fout in jouw oplossing!</h1>";
//pas het aantal sterren aan
            var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
            if (aantalSterren>0) {
                document.getElementById("aantalSterren").innerHTML = aantalSterren-1;
            }
        }
    }
    var einde = eindpunt[pos-1];
    if (robothokje==einde) {
        //einde bereikt
        document.getElementById("resultaat").innerHTML ="<h1 class='goed'>Doolhof " + doolhofId + " correct opgelost!</h1>"
        clearInterval(intervalRobot);
        setTimeout(doolhofOpgelost,1000);
       }
}
function doolhofOpgelost() {
    doolhofId++;
    if (doolhofId<=3) {
        opnieuw();
        clearDoolhof();
        maak(doolhofId)
        document.getElementById("resultaat").innerHTML = "";
    } else {
        document.getElementById("oplossing").disabled = "true";
        document.getElementById("opnieuw").disabled = "true";
        document.getElementById("opgeven").disabled = "true";
        
        //leg het aantalSterren vast
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        updateSterren(aantalSterren)       
        document.getElementById("nextLevel").style.display="block";
    }
}
var vbIntervalRobot;
var vbTeller = 1;
function voorbeeldOplossing() {
    console.log("Hi");
    document.getElementById("vbOplos1").src = "img/pijlD.jpg";
    document.getElementById("vbOplos2").src = "img/pijlR.jpg";
    document.getElementById("vbOplos3").src = "img/pijlR.jpg";
    vbIntervalRobot = setInterval(zetVbRobot,500);
}

function zetVbRobot() {
    var vbRobotHokje = "vb" + vbTeller;
    document.getElementById(vbRobotHokje).innerHTML = "";
    vbTeller++;
    var vbRobotHokje = "vb" + vbTeller;
    document.getElementById(vbRobotHokje).innerHTML = "<div id=vbRobot></div>";
    if (vbTeller == 4) {
        clearInterval(vbIntervalRobot);
    }
}