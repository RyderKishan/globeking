function submitForm() {
  var formValues = document.getElementById("myForm");
  var userName = document.getElementById("nameSelect").value;
  console.log("User : " + userName + " Selected");
  var data = [];
  for (var index = 0; index < formValues.length; index++) {
    data.push(formValues.elements[index].value);
  }
  var formValueJSON = {};
  formValueJSON["formValuesArray"] = data;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      if (response.success) {
        alert(response.message);
        console.log("Success");
        window.reload();
      }
    }
  };
  xhttp.open("POST", "http://globeking.ga/submitForm.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("data=" + JSON.stringify(formValueJSON) + "&userName=" + userName);
}

function loginToSlam() {
  var userName = document.getElementById("slamUserName").value;
  var password = document.getElementById("slamPassword").value;
  alert("USER : " + userName + " PASS : " + password);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };
  xhttp.open("POST", "http://globeking.ga/loginToSlam.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("username=" + userName + "&password=" + password);
}