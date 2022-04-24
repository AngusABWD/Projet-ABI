//  Function pour la partie Utilisateur Kevin

// Function pour afficher Utilisateur Kevin

function showUser(str) {
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./model/ajaxUser.php?search=" + str, true);
    xmlhttp.send();
  }
}
//  Function pour la partie Client Patricio

// Function pour afficher Client

function showClient(str) {
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./model/ajaxClient.php?search=" + str, true);
    xmlhttp.send();
  }
}