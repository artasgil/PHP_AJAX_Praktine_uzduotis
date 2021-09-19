"use strict";

function showClients() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "action.php", false);
    xhttp.send();
}

document.querySelector("#show").addEventListener("click", function () {

    showClients();
    var show = document.querySelector("#output");
    show.classList.toggle("d-none");
});

document.querySelector("#create").addEventListener("click", function () {

    var clientForm = document.querySelector("#clientForm");
    clientForm.classList.toggle("d-none");


    document.querySelector("#vardas").value = "";
    document.querySelector("#pavarde").value = "";
    document.querySelector("#slapyvardis").value = "";
    document.querySelector("#slaptazodis").value = "";
    document.querySelector("#teises_id").value = "";


});

document.querySelector("#createClient").addEventListener("click", function () {
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var slapyvardis = document.querySelector("#slapyvardis").value;
    var slaptazodis = document.querySelector("#slaptazodis").value;
    var teises_id = document.querySelector("#teises_id").value;




    //ajax uzklausa
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("GET", "pridetivartotoja.php?vardas=" + vardas + "&pavarde=" + pavarde + "&slapyvardis=" + slapyvardis + "&teises_id=" + teises_id + "&slaptazodis=" + slaptazodis, false);

    xhttp.send();


    showClients();


});


document.querySelector("#company_create").addEventListener("click", function () {


    var companyForm = document.querySelector(".companyForm");
    companyForm.classList.toggle("d-none");


});

