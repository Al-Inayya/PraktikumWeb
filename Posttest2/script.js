function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    var class_a = document.getElementsByClassName("nama");
  class_a[0].classList = "dark-mode-nama";
  document.getElementById("tombolTema").innerHTML = "Light Mode";
  window.alert("Apakah ingin merubah Mode?");
 }
 