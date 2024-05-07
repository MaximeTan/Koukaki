// burger menu
var hamburgerButton = document.querySelector(".nav-toggler")
var navigation = document.querySelector("nav")

hamburgerButton.addEventListener("click", toggleNav)

function toggleNav(){
  hamburgerButton.classList.toggle("active")
  navigation.classList.toggle("active")
};

//
// Animation des titres au scroll 
window.onload = () => {
    //on crée l'observer
    let observer= new IntersectionObserver(observables => {
        for(let observable of observables) {
            if(observable.isIntersecting){
                observable.target.classList.remove("title__fadeIn");
            }
        }
    },
    );
    // on récupère les sections
    const titles = document.querySelectorAll(".hidden");
    for(let title of titles){
        title.classList.add("title__fadeIn");
        // on observe les sections 
        observer.observe(title)
    }
    console.log("Bonjour");
};
// FIN ANIMATION FADE IN

// Animation Skrollr Parallaxe

// Animation Swiper




