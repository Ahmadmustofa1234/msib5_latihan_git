const links = document.querySelectorAll("#link")
// 
$(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    responsive: {
        0: { items: 1, nav: false },
        600: { items: 2, nav: false },
        1000: { items: 3, nav: false },
    },
  });
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

window.addEventListener("scroll", function(){
  document.querySelector("header").classList.toggle("active",scrollY > 50)
})

function smoothScroll(e) {
  e.preventDefault()
  let id = this.getAttribute("href")
  console.log(id);
  const offsetTop = document.querySelector(id).offsetTop
  scroll({
      top: offsetTop,
      behavior: "smooth"
  });

  // navbar_m_nav.classList.remove('active')
  // toggle_nav.setAttribute('class', 'fa fa-bars')
}

links.forEach((link => {
  link.addEventListener("click", smoothScroll)
}))