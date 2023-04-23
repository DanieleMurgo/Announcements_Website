
const searchBarContainerEl = document.querySelector(".search-bar-container");

const botton = document.querySelector(".botton-search");

const magnifierEl = document.querySelector(".magnifier");

const spostaBottone = document.querySelector(".spostaBottone");


const positionBottom = document.querySelector(".position-botton-search");

magnifierEl.addEventListener("click", () => {
  searchBarContainerEl.classList.toggle("active");
  botton.classList.toggle("d-none");
  spostaBottone.classList.toggle("margine-bottone");
  positionBottom.classList.toggle("padding-search");
});