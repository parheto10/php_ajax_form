var passeword = "Parhe10to";
var url = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9] {8,}$/;

if (url.test(passeword)) {
  alert("passeword entrer valide Merci");
} else {
  alert("passeword incorrect vérifié !!");
}
