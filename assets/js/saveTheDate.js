function windowDimensions() {
  let ww = window.innerWidth;  // window width
  let wh = window.innerHeight; // window height

  let dimensions = {
    w: ww,
    h: wh,
  }

  return dimensions;
}

// p5js

let cnv;

function setup() {
  cnv = createCanvas(windowDimensions().w, windowDimensions().h, document.getElementById('canvas'));
  cnv.parent('canvas');
}

function toggleVisibility(n = 0) {
  console.log(`toggleVisibility: ${n} is running`);

  // Reveal text
  let sectionsArray = document.querySelectorAll('main section');
  [...sectionsArray].forEach(section => {
    section.classList.remove('visible');
  })
  document.querySelector(`main section:nth-child(${n})`).classList.add('visible');
}

function draw() {
  let midX = windowDimensions().w / 2;
  let midY = windowDimensions().h / 2;

  setTimeout(() => {
    if (mouseX < midX && mouseY < midY) {
      // top-left corner
      toggleVisibility(1);
    } else if (mouseX > midX && mouseY < midY) {
      // top-right corner
      toggleVisibility(2);
    } else if (mouseX < midX && mouseY > midY) {
      // bottom-left corner
      toggleVisibility(3);
    } else if (mouseX > midX && mouseY > midY) {
      // bottom-right corner
      toggleVisibility(4);
    }
  }, 500);
}

// gsap
let t = 10;
let flarePink = document.querySelector('.flare');
let flareWhite = document.querySelector('.flare-neg');
let tlPink = gsap.timeline({ repeat: -1 });
let tlWhite = gsap.timeline({ repeat: -1 });

tlPink.fromTo(flarePink, {
  top: '-150dvh',
  left: '150dvw'
}, {
  top: '150dvh',
  left: '-50dvw',
  duration: t
}, 0)
tlPink.fromTo(flarePink, {
  top: '150dvh',
  left: '-50dvw'
}, {
  top: '-200dvh',
  left: '100dvw',
  duration: t
}, ">")
tlPink.fromTo(flarePink, {
  top: '-150dvh',
  left: '-150dvw'
}, {
  top: '150dvh',
  left: '200dvw',
  duration: t
}, ">")

tlWhite.fromTo(flareWhite, {
  top: '150dvh',
  left: '-50dvw'
}, {
  top: '-150dvh',
  left: '150dvw',
  duration: t
}, 0)
tlWhite.fromTo(flareWhite, {
  top: '-150dvh',
  left: '-150dvw'
}, {
  top: '100dvh',
  left: '200dvw',
  duration: t
}, ">")
tlWhite.fromTo(flareWhite, {
  top: '150dvh',
  left: '-50dvw'
}, {
  top: '-200dvh',
  left: '50dvw',
  duration: t
}, ">")