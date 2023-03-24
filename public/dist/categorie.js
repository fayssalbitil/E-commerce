var detailcategorie = document.getElementById("detailcategorie");
var addcategorie = document.getElementById("addcategorie");

function showdetailcategorie() {

    addproduct.style.display = "none";
    detailproduct.style.display = "none";
    addcategorie.style.display = "none";
    detailcategorie.style.display = "inline-block";
}

function showaddcategorie() {

    detailcategorie.style.display = "none";
    addcategorie.style.display = "inline-block";
}