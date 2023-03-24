var detailproduct = document.getElementById("detailproduct");
var addproduct = document.getElementById("addproduct");
var detailcategorie = document.getElementById("detailcategorie");


function showdetailproduct() {
    detailproduct.style.display = "inline-block";

    detailcategorie.style.display = "none";
    addcategorie.style.display = "none";
    addproduct.style.display = "none";


}
function showaddproduct() {
    addproduct.style.display = "inline-block";

    detailproduct.style.display = "none";
    addcategorie.style.display = "none";
    detailcategorie.style.display = "none";

}
var edit = document.getElementById("edit").value;
function showeditproduct() {
    alert(edit);
}

