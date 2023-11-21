import Splide from "@splidejs/splide";
import "@splidejs/splide/dist/css/splide.min.css";

// Currently html being rendered before all javascript is loaded this causes a layout shifting
// especially on devices with slow internet connection.
// TODO: Check if there is any better way for handling this
const QUERY = "#slider";
const slider = document.querySelector(QUERY);

slider.style.display = null;

const splide = new Splide(QUERY, {
  perPage: 1,
  autoplay: false,
  interval: 1000,
  type: "loop",
});

splide.mount();
