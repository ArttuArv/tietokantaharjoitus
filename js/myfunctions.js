function loadDoc(page) {
    console.log(page);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("content").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", page, true);
    xhttp.send();
  }
  
  window.onload=function loadFirst() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("content").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "nakymat.php", true);
    xhttp.send();
  }