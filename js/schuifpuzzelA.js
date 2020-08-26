    var img = new Image();
    var imgRij = ["img/kv-NAO.png","img/amstelland.jpg", "img/appdev.jpg"];
    var pos=0;
    img.src = imgRij[0];
    var krnr = 3;
    var imgPuzzelStukken = new Array(8 * 8);
    var LegePlek;
    var OudeLegeplek;
    var Husselnr, Husselmax;
    var Pauzetijd;
    var intScore;
    var GameStarted;
    var bx, by, ex, ey, Anix, Aniy,dx, dy, MaxSteps, Stepnr; //voor schuianimatie
    for (var i = 0; i < (8 * 8); i++) {
      imgPuzzelStukken[i] = new Array(2);
    }
    //**************************************************************************************
function toonTijd() {
    document.getElementById("klok").innerHTML = duur;
    duur--;
    
}

function gameOver(){
    document.onmousedown = null;
    document.onmousemove = null;
    document.onmouseup = null;
    //laatste plaatje gehad
    //console.log(pos);
    if (pos == imgRij.length-1) {
        //update sterren
        var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML);
        updateSterren(aantalSterren);
        document.getElementById("nextLevel").style.display="block";
    
    } else {
      document.getElementById("puzzel"+ (pos)).style.display= "none";
      document.getElementById("puzzel"+ (pos+1)).style.display= "block";
    
      document.getElementById("puzzel"+ (pos+1)).disabled= false;
    }
    
}
var nietGelukt= false;
function eindTijd () {
    clearInterval(stopwatch);
    document.getElementById("resultaat").innerHTML ="<h1 class='message'>Tijd is voorbij!</h1>"
    var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 2;
  
    if (aantalSterren >= 0 ) {
        document.getElementById("aantalSterren").innerHTML = aantalSterren;
    }
    nietGelukt = true;
    gameOver();
}
var duur=0;
  function StartPuzzel() {
    document.getElementById("puzzel"+pos).disabled=true;
    document.getElementById("schud").disabled=true;
    
    var canvas = document.getElementById("myCanvas" + pos);
    var ctx = canvas.getContext("2d");
    LaadPicture(pos);
    IniPicture();
    LegePlek = krnr *krnr-1;
    OudeLegeplek = krnr *krnr-1; //om husselen eeficienter
    ctx.fillStyle = "#FFFF00";
    ctx.fillRect(0,0,canvas.width, canvas.height);
    TekenSchuifpuzzel();
    Husselmax = krnr * krnr * krnr;
    Husselnr = 0;
    intScore = 0;
    Pauzetijd = Math.floor(3000 / Husselmax);
    GameStarted = true;
    Husselinterval = setInterval(function(){Husselen();}, Pauzetijd);
    stopwatch = setInterval(toonTijd, 1000);
    timer = setTimeout(eindTijd,duur*1000);
  }
  //**********************************************************************************
  function IniPicture() {
    var canvas = document.getElementById("myCanvas" + pos);
    var ctx = canvas.getContext("2d");
    var picSize = canvas.width / krnr;
    var PSnr = 0;
    for (var r = 0; r< krnr; r++) {
      for (var k = 0; k< krnr; k++) {
         imgPuzzelStukken[PSnr][0] = PSnr;
         imgPuzzelStukken[PSnr][1] = ctx.getImageData(k* picSize, r * picSize, picSize, picSize);
         PSnr++;
      }
    }
  }
  //**********************************************************************************
  function Husselen() {
    var Schuifrichting;
    var Schuifnr;
    var Gewisseld;
    Gewisseld = false;
    while (Gewisseld == false) {
      Schuifrichting = Math.floor(Math.random() *4);
      switch (Schuifrichting) {
        case 0: if (LegePlek >= krnr) { //boven
                   if ((LegePlek -krnr) != OudeLegeplek) {
                     OudeLegeplek = LegePlek;
                     Wissel(LegePlek - krnr, LegePlek);
                     Gewisseld = true;
                   }
                 }
                 break;
        case 1: if (LegePlek < (krnr * (krnr-1))) { //beneden
                  if (LegePlek + krnr != OudeLegeplek) {
                    OudeLegeplek = LegePlek;
                    Wissel(LegePlek + krnr, LegePlek);
                    Gewisseld = true;
                  }
                }
                break;
        case 2: if (LegePlek % krnr != 0) { //links
                  if (LegePlek -1 != OudeLegeplek) {
                    OudeLegeplek = LegePlek;
                    Wissel(LegePlek - 1, LegePlek);
                    Gewisseld = true;
                  }
                }
                break;
        case 3: if (LegePlek % krnr != (krnr -1)) { //rechts
                  if (LegePlek + 1 != OudeLegeplek) {
                    OudeLegeplek = LegePlek;
                    Wissel(LegePlek + 1, LegePlek);
                    Gewisseld = true;
                  }
                }
      }
    }
    Husselnr++;
    if (Husselnr >= Husselmax) {
      clearInterval(Husselinterval);
    }
    TekenSchuifpuzzel();
  }
  //********************************************************
  function TekenSchuifpuzzel() {
    var canvas = document.getElementById("myCanvas"+pos);
    var ctx = canvas.getContext("2d");
    var picSize = canvas.width / krnr;
    var imgnr, PSnr;
    PSnr = 0;
    for (var r = 0; r< krnr; r++) {
      for (var k = 0; k< krnr; k++) {
        imgnr = imgPuzzelStukken[PSnr][0];
        ctx.putImageData(imgPuzzelStukken[imgnr][1], k* (picSize), r * (picSize));
        if (PSnr == LegePlek) {
          ctx.fillRect(k * (picSize), r * (picSize), picSize, picSize);
        }
        PSnr++;
      }
    }
    ctx.strokeStyle = "#FFFF00";
    ctx.lineWidth = 1.5;
    for (var r = 0; r<= krnr; r++) {
      ctx.beginPath();
      ctx.moveTo(0, r* picSize);
      ctx.lineTo(canvas.width, r* picSize);
      ctx.stroke();
    }
    for (var k = 0; k<= krnr; k++) {
      ctx.beginPath();
      ctx.moveTo(k* picSize, 0);
      ctx.lineTo(k* picSize,canvas.width);
      ctx.stroke();
    }
  }
  //********************************************************
  function Schuif(e) {
    var canvas = document.getElementById("myCanvas" + pos);
    var rect = canvas.getBoundingClientRect();
    var picSize = canvas.width / krnr;
    var XPos, YPos;
    var PSnr, OudeLP;
    var emScore;
    if (GameStarted) {
      XPos = Math.floor(e.clientX - rect.left);
      YPos = Math.floor(e.clientY - rect.top);
      PSnr = Math.floor(YPos/ picSize)* krnr + Math.floor(XPos/picSize);
      if (ZijnBuren(PSnr, LegePlek)) {
         OudeLP = LegePlek; //voor animatie
         Wissel(PSnr, LegePlek);
         intScore++;
         if (ControlSolution()) {
           LaadPicture(pos);
           GameStarted = false;
            document.getElementById("schud").disabled=true;
            clearInterval(stopwatch);
            clearTimeout(timer);
            if (duur<10) {
              var aantalSterren = parseInt(document.getElementById("aantalSterren").innerHTML) - 1;
              if (aantalSterren >= 0 ) {
                  document.getElementById("aantalSterren").innerHTML = aantalSterren;
              }
            }
            if (pos<2) {
              document.getElementById("puzzel"+(pos)).style.display="none";
              document.getElementById("puzzel"+(pos+1)).style.display="block";
            } else {
              gameOver();
            }
         }
         else {
           AnimatieVoorbereiding(PSnr, OudeLP);
         }
      }
    }
  }
  //********************************************************
  function AnimatieVoorbereiding(SchuifPic, SchuifDoel) {
    var canvas = document.getElementById("myCanvas" + pos);
    var picSize = canvas.width / krnr;
    var ex, ey;
    bx = (SchuifPic % krnr) * picSize;
    by = (Math.floor(SchuifPic / krnr)) * picSize;
    Anix = bx;
    Aniy = by;
    ex = (SchuifDoel % krnr) * picSize;
    ey = (Math.floor(SchuifDoel / krnr)) * picSize;
    MaxSteps = 20;
    dx = picSize /MaxSteps;
    dy = picSize /MaxSteps;
    if (ex < Anix) {dx = -dx;}
    if (ey < Aniy) {dy = -dy;}
    if (ex == Anix) {dx = 0;}
    if (ey == Aniy) {dy = 0;}
    //alert(dx + ","+ dy);
    Stepnr = 0;
    Pauzetijd = Math.floor(200 / MaxSteps);
    Schuifinterval = setInterval(function(){SchuifAnimatie(SchuifPic,SchuifDoel);}, Pauzetijd);
  }
  //**********************************************************************
  function SchuifAnimatie(SchuifPic, SchuifDoel) {
    var canvas = document.getElementById("myCanvas"+pos);
    var ctx = canvas.getContext("2d");
    var picSize = canvas.width / krnr;
    var x1, y1, w, h;
    var Schuifrichting;
    ctx.fillStyle = "#FFFF00";
    if (dx > 0) { //naar rechts
      x1 = bx;
      y1 = by;
      w =  Math.floor(Anix) - bx;
      h =  picSize;
    }
    if (dx < 0) { //naar links
      x1 = Math.floor(Anix) + picSize;
      y1 = by;
      w =  bx - Math.floor(Anix);
      h =  picSize;
    }
    if (dy > 0) { //naar beneden
      x1 = bx;
      y1 = by;
      w  = picSize;
      h  = Math.floor(Aniy) - by;
    }
    if (dy < 0) { //naar boven
      x1 = bx;
      y1 = Math.floor(Aniy) + picSize;
      w =  picSize;
      h =  by - Math.floor(Aniy);
    }
    ctx.fillRect(x1,y1, w, h);
    var imgnr = imgPuzzelStukken[SchuifDoel][0];
    ctx.putImageData(imgPuzzelStukken[imgnr][1] ,Math.floor(Anix) , Math.floor(Aniy));
    Anix+= dx;
    Aniy+= dy;
    Stepnr++;
    if (Stepnr >= MaxSteps) {
      clearInterval(Schuifinterval);
      TekenSchuifpuzzel();
    }
  }
  //********************************************************
  function Wissel(PS1, PS2) {
    var Schuifnr;
    Schuifnr = imgPuzzelStukken[LegePlek][0];
    imgPuzzelStukken[PS2][0] = imgPuzzelStukken[PS1][0];
    imgPuzzelStukken[PS1][0] = Schuifnr;
    LegePlek = PS1;
  }
  //********************************************************
  function ZijnBuren(PS1, PS2) {
     var Buren = false;
     if ((Math.abs(PS1 - PS2) == krnr) || (Math.abs(PS1 - PS2) == 1)) {
       Buren = true;
     }
     return Buren;
  }
  //********************************************************
  function ControlSolution() {
     var Solution = true;
     var PSnr;
     PSnr = 0;
     for (var r = 0; r< krnr; r++) {
       for (var k = 0; k< krnr; k++) {
          if (imgPuzzelStukken[PSnr][0] != PSnr) {
            Solution = false;
          }
          PSnr++;
     }
     }
   return Solution;
  }
    function LaadPicture() {
      var c = document.getElementById("myCanvas" +pos);
      var ctx = c.getContext("2d");
      var img = document.getElementById("picture" +pos); 
      ctx.clearRect(0, 0, 512, 512);
      ctx.drawImage(img, 0, 0);

  }
  //***************************************************************************************************

  function startPicture(){
    var imgPos=0;
    for (var i=0;i<3;i++) {
      var c = document.getElementById("myCanvas" +i);
      var ctx = c.getContext("2d");
      var img = document.getElementById("picture" +i); 
      ctx.drawImage(img, 0, 0);
    } 
    document.getElementById("schud").disabled= false;
    switch (pos) {
      case 0: duur = 100; break;
      case 1: duur = 100; break;
      case 2: duur = 100; break;
    }
  }
  //********************************************************
  function setPicture(imgPos) {
    pos=imgPos;
    switch (imgPos) {
      case 0: duur = 10; break;
      case 1: duur = 100; break;
      case 2: duur = 100; break;
    }
    
    //console.log(imgPos);
    document.getElementById("myCanvas" + (pos-1)).style.display = "none";
    document.getElementById("myCanvas" + (pos)).style.display = "block";
    document.getElementById("resultaat").innerHTML =""
    document.getElementById("schud").disabled=false;
    document.getElementById("puzzel" + pos).style.display = "none";
    
    img.src = imgRij[imgPos];
    LaadPicture(imgPos);
  }