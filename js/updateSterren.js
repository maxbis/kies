// JavaScript File

function updateSterren(aantal) {
    console.log(aantal);
    $.post("updateSterren.php",
    {
      aantalSterren: aantal,
    },
    function(data, status){
      return true;
    }); 

    document.getElementById("nextLevel").style.display = "block";
    document.getElementById("gevondenCijfer").style.display= "block";
}
