// Question 1
function popup() {
  confirm("Etes-vous sûr de vouloir envoyer votre demande ?");
}

// Question 2
function validate() {
  e.preventDefault();
  var nom = document.getElementById("Nom").value;
  var prenom = document.getElementById("Prénom").value;
  var email = document.getElementById("Email").value;

  if (
    nom == "" ||
    nom == null ||
    prenom == "" ||
    prenom == null ||
    email == "" ||
    email == null
  ) {
    document.getElementById("error").innerHTML =
      "Tous les champs doivent être remplis";
  } else {
    if (nom == "" || nom == null) {
      document.getElementById("errorNom").innerHTML =
        "Le champ nom doit être rempli";
    }
    if (prenom == "" || prenom == null) {
      document.getElementById("errorPrenom").innerHTML =
        "Le champ prenom doit être rempli";
    }
    if (email == "" || email == null) {
      document.getElementById("errorEmail").innerHTML =
        "Le champ email doit être rempli";
    }
  }
}

// Question 3
function validateEmail() {
  let email = document.getElementById("Email").value;
  const format = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

  if (format.test(email) == false) {
    document.getElementById("validateEmail").innerHTML =
      "Attention, l’email n’est pas correct";
    document.getElementById("Email").focus();
  } else {
    document.getElementById("validateEmail").innerHTML = null;
  }
}
