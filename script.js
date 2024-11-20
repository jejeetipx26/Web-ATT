//active header sticky 
const header = document.querySelector("header");
window.addEventListener("Scroll",()=>{
    header.classList.toggle("sticky",window.scrollY > 50)
})


//active scroll menu

const lilink = document.querySelectorAll("header ul li a");
const section = document.querySelectorAll("section");

function activeMenu() {
    let scrollPosition = window.scrollY;
    section.forEach((sec, index) => {
        const sectionTop = sec.offsetTop - 200; 
        if (scrollPosition >= sectionTop) {
            lilink.forEach((link) => link.classList.remove("active"));
            lilink[index].classList.add("active");
        }
    });
}

activeMenu();
window.addEventListener("scroll", activeMenu);



//active menu icon

// Active nav list
const navList = document.querySelectorAll(".lilink > .nav-item");
let navActive = document.querySelector(".nav-item.active");
Array.from(navList).map( e => {
    e.addEventListener("click", el => {
        el.currentTarget.classList.add("active")
        navActive.classList.remove("active")
        navActive = el.currentTarget
    })
})

//remove menu list

window.onscroll = () =>{
    menuIcon.classList.remove("bx-x");
    navlist.classList.remove("open")
}


//scroll observer

const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            entry.target.classList.add("show-items");
        }else{
            entry.target.classList.remove("show=items")
        }
    })
})

const scrollLeft = document.querySelectorAll(".scroll-left");
scrollLeft.forEach((el)=>observer.observe(el));

const scrollRight = document.querySelectorAll(".scroll-right");
scrollRight.forEach((el)=>observer.observe(el));

const scrollTop = document.querySelectorAll(".scroll-top");
scrollTop.forEach((el)=>observer.observe(el));

const scrollBottom = document.querySelectorAll(".scroll-bottom");
scrollBottom.forEach((el)=>observer.observe(el));

const scrollScale = document.querySelectorAll(".scroll-scale");
scrollScale.forEach((el)=>observer.observe(el));
