
const glide1 = document.getElementById("glide1");

if (glide1)
    new Glide(glide1, {
    type: "carousel",
    startAt: 0,
    perView: 3,
    hoverpause: false,
    autoplay: 2000,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
      420: {
        perView: 1,
      },
    },
  }).mount();
