let x = document.getElementById("act1");
let y = document.getElementById("act2");
let z = document.getElementById("act3");
let s = document.getElementById("act4");
let u = document.getElementById("act5");

let a = document.getElementById("bor1");
let b = document.getElementById("bor2");
let c = document.getElementById("bor3");
let t = document.getElementById("bor4");
let v = document.getElementById("bor5");

var value = 1;

x.addEventListener("mouseover", () => {

    x.classList.add("hov");
    y.classList.remove("hov");
    z.classList.remove("hov");
    s.classList.remove("hov");
    u.classList.remove("hov");

    a.classList.add("hovborder");
    b.classList.remove("hovborder");
    c.classList.remove("hovborder");
    t.classList.remove("hovborder");
    v.classList.remove("hovborder");


});
y.addEventListener("mouseover", () => {

    y.classList.add("hov");
    x.classList.remove("hov");
    z.classList.remove("hov");
    s.classList.remove("hov");
    u.classList.remove("hov");


    b.classList.add("hovborder");
    a.classList.remove("hovborder");
    c.classList.remove("hovborder");
    t.classList.remove("hovborder");
    v.classList.remove("hovborder");

});
z.addEventListener("mouseover", () => {

    z.classList.add("hov");
    y.classList.remove("hov");
    x.classList.remove("hov");
    s.classList.remove("hov");
    u.classList.remove("hov");

    c.classList.add("hovborder");
    b.classList.remove("hovborder");
    a.classList.remove("hovborder");
    t.classList.remove("hovborder");
    v.classList.remove("hovborder");
});

s.addEventListener("mouseover", () => {

    s.classList.add("hov");
    y.classList.remove("hov");
    x.classList.remove("hov");
    z.classList.remove("hov");
    u.classList.remove("hov");

    t.classList.add("hovborder");
    c.classList.remove("hovborder");
    b.classList.remove("hovborder");
    a.classList.remove("hovborder");
    v.classList.remove("hovborder");

});


u.addEventListener("mouseover", () => {

    s.classList.remove("hov");
    y.classList.remove("hov");
    x.classList.remove("hov");
    z.classList.remove("hov");
    u.classList.add("hov");

    t.classList.remove("hovborder");
    c.classList.remove("hovborder");
    b.classList.remove("hovborder");
    a.classList.remove("hovborder");
    v.classList.add("hovborder");

});


window.addEventListener('scroll', function() {
    var element = document.querySelector('.text');
    var position = element.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
  
    if (position < windowHeight * 0.5) {
      element.classList.add('showdes');
    }
  });