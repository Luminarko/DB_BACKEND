let response = confirm("Do you really want to delete this row?")
let conf = document.getElementById("yn")

if(response ==  true){
    window.open("../LOGIN/edit_page.php", "_self")
    conf.innerHTML = "Y";
}
else{
    window.open("../LOGIN/edit_page.php", "_self");
    conf.innerHTML = "N";
}