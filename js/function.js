function showPassword() {
    var x = document.getElementById("motdepasse");
    var y = document.getElementById("imgmdp");
    var img1 = "../photo/oeil1.png";
    var img2 = "../photo/oeil2.png";

    if (x.type === "password") {
      x.type = "text";
      y.src = img2;
    } else {
      x.type = "password";
      y.src = img1;
    }
}

function showPassword2() {
    var x = document.getElementById("remotdepasse");
    var y = document.getElementById("reimgmdp");
    var img1 = "../photo/oeil1.png";
    var img2 = "../photo/oeil2.png";

    if (x.type === "password") {
      x.type = "text";
      y.src = img2;
    } else {
      x.type = "password";
      y.src = img1;
    }
}