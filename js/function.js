function showPassword() {
    var x = document.getElementById("motdepasse");
    var y = document.getElementById("imgmdp");

    if (x.type === "password") {
      x.type = "text";
      y.src = "../photo/oeil2.png";
    } else {
      x.type = "password";
      y.src = "../photo/oeil1.png";
    }
}

function showPassword2() {
    var x = document.getElementById("remotdepasse");
    var y = document.getElementById("reimgmdp");

    if (x.type === "password") {
      x.type = "text";
      y.src = "../photo/oeil2.png";
    } else {
      x.type = "password";
      y.src = "../photo/oeil1.png";
    }
}
