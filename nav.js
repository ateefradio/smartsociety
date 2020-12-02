function myFunction() {
    var x = document.getElementById("hamburger");
    if (x.className === "hamburger") {
      x.className += " responsive";
    } else {
      x.className = "hamburger";
    }
  }