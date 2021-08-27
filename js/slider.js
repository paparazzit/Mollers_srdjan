// let sliderImages = document.querySelectorAll('.slide'),
// radioBtn1 = document.querySelector('#radio1'),
// radioBtn2 = document.querySelector('#radio2'),
// radioBtn3 = document.querySelector('#radio3'),
// radioBtn4 = document.querySelector('#radio4'),
// current = 0;

// Clear all img
// function reset(){
//     for(let i=0; i< sliderImages.length ; i++){
//         sliderImages[i].style.display = 'none';
//     }
// }

// function startSlide(){
// reset();
// sliderImages[0].style.display = 'block';
// }
// startSlide();

// //first block
// function imgOne(){
//     if(sliderImages[current == 2]){
//     sliderImages[current - 1].style.display = 'block';
//     current--;
//     }
// }

// $(document).ready(function(){
//     $('.slider_content').click(function(){
//         $('.slider_content').animate({
//             left: '17.5%',
//             top: '0%',
//             height: '100%',
//             width: '35%'
//         },1000)
//         $('.slider_content').on('click',function(){
//             $('.slider_content').animate({
//                 left: '82.5%',
//                 top: '0%',
//                 height: '100%',
//                 width: '35%'
//             },1000).stop()
//             $('#slider_flag').animate({
//                 top: '3%',
//                 left: '1%'
//             },1000)
//             })

//     });
// })

// SLIDER SRDJAN

let slides = document.querySelectorAll(".slider");
let indicators = document.querySelector(".slider_navigation");
let slider_flag = document.querySelector("#slider_flag");
let slider_content = document.querySelector(".slider_content");
let slide_headline = document.querySelector(".slide_headline");
let index = 0;
let slide_headlines = [
	"Esencijalne masne <br> kiseline",
	"Kako Omega-3 kiseline utiču na naše zdravlje",
	"Nova prodajna mesta",
];

// INDIKATORI
function makeIndicators() {
	for (let i = 0; i < slides.length; i++) {
		const div = document.createElement("div");
		div.setAttribute("class", "nav-btn");
		div.setAttribute("onclick", "indicateSlides(this)");
		div.id = i;
		if (i == 0) {
			div.classList.add("active");
		}
		indicators.appendChild(div);
	}
}

function updatedIndicators() {
	for (let i = 0; i < indicators.children.length; i++) {
		// console.log(indicators.children[i]);
		indicators.children[i].classList.remove("active");
	}
	indicators.children[index].classList.add("active");
}

makeIndicators();

function indicateSlides(element) {
	// console.log(element);
	index = element.id;
	updatedIndicators();
	changeSlides();
}

// SLIDES Change

function changeSlides() {
	for (let i = 0; i < slides.length; i++) {
		slides[i].classList.remove("show_slides");
	}
	slides[index].classList.add("show_slides");
	move_content();
}

function move_content() {
	if (index == 0) {
		slider_flag.style.right = "9%";
		slider_flag.style.bottom = "9%";
		slider_content.className = "slider_content";
		slide_headline.innerHTML = slide_headlines[0];
		// slider_content.classList.remove("move_left");
	}
	if (index == 1) {
		slider_flag.style.right = "9%";
		slider_flag.style.bottom = "9%";
		slider_content.className = "slider_content";
		slider_content.classList.add("move_right");
		slide_headline.innerHTML = slide_headlines[1];
	}
	if (index == 2) {
		slider_flag.style.right = "97%";
		slider_flag.style.bottom = "97%";
		slider_content.classList.add("move_left");
		slide_headline.innerHTML = slide_headlines[2];
	}
}
