/*fonction du modal pour sa fermeture*/
var modal= document.getElementById("magasin");
var span = document.getElementById("close");

magasinbtn.onclick=function(){
  modal.style.display="block";

}

span.onclick = function() {
    modal.style.display = "none";
}
/*A vérifier , peut-être à enlever*/
window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
   }
}
