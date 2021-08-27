
const openNav = document.querySelector('.open');
const closeNav = document.querySelector('.close');
const navigation = document.querySelector('.navigation');

openNav.onclick = function(){
openNav.classList.toggle("active");
navigation.classList.toggle("active");
}
closeNav.onclick = function (){
closeNav.classList.toggle("active");
navigation.classList.toggle("active");
}

