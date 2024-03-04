
function logout() {
  // Implement your logout logic here
  alert('Logout button clicked!');
}
function showberitaon(){
  document.getElementById("formadd").style.display="block"
  setTimeout(() => {
    document.getElementById("formadd").style.bottom="0px"
  }, 100);
}
function showberitaoff(){
  document.getElementById("formadd").style.bottom="-1000px"
  setTimeout(() => {
    document.getElementById("formadd").style.display="block"
  }, 1000);
}
new DataTable('#example');