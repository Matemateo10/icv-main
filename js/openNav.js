function openNav() {
    
    var mobNav = document.getElementById('myNav');

    var overlay = document.querySelector('.overlay');

    var computedRight = window.getComputedStyle(mobNav).getPropertyValue('right');

    var scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;

     //LOGIKA
     if (computedRight === '-320px') {

        mobNav.style.right = "0px";
        document.body.style.overflowY = "hidden";
        document.body.style.paddingRight = scrollbarWidth + "px";
        overlay.classList.add('show');

    } else {

        mobNav.style.right = "-320px";
        document.body.style.overflowY = "auto";
        document.body.style.paddingRight = 0;
        overlay.classList.remove('show');

    }
}

function toggleMobDropdown(){
    var dropdownMenu = document.getElementById("dropdown-mobile-1");
    var imgRotate = document.getElementById("arrow-mobile-1");

    if(dropdownMenu.style.display === "block"){
        dropdownMenu.style.display = "none";
        imgRotate.style.transform = "rotate(0deg)";
   
    } else {
        dropdownMenu.style.display = "block";
        imgRotate.style.transform = "rotate(180deg)";
    }
}

function toggleMobDropdown2() {
  
    var dropdownMenu1 = document.getElementById("dropdown-mobile-2");
    var imgRotate1 = document.getElementById("arrow-mobile-2");
  
    if (dropdownMenu1.style.display === "block"){
        dropdownMenu1.style.display = "none";
        imgRotate1.style.transform = " rotate(0deg)";
    } else {
        dropdownMenu1.style.display = "block";
        imgRotate1.style.transform = " rotate(180deg)";
    }
  }

function toggleMobDropdown3(){

    var dropdownMenu2 = document.getElementById("dropdown-mobile-3");
    var imgRotate2 = document.getElementById("arrow-mobile-3");

    if(dropdownMenu2.style.display === "block"){
        dropdownMenu2.style.display = "none";
        imgRotate2.style.transform = "rotate(0deg)";
    } else {
        dropdownMenu2.style.display = "block";
        imgRotate2.style.transform = "rotate(180deg)";
    }

}

function toggleMobDropdown4(){

    var dropdownMenu3 = document.getElementById("dropdown-mobile-4");
    var imgRotate3 = document.getElementById("arrow-mobile-4");

    if(dropdownMenu3.style.display === "block"){
        dropdownMenu3.style.display = "none";
        imgRotate3.style.transform = "rotate(0deg)";
    } else {
        dropdownMenu3.style.display = "block";
        imgRotate3.style.transform = "rotate(180deg)";
    }

}

function toggleMobDropdown5(){

    var dropdownMenu4 = document.getElementById("dropdown-mobile-5");
    var imgRotate4 = document.getElementById("arrow-mobile-5");

    if(dropdownMenu4.style.display === "block"){
        dropdownMenu4.style.display = "none";
        imgRotate4.style.transform = "rotate(0deg)";
    } else {
        dropdownMenu4.style.display = "block";
        imgRotate4.style.transform = "rotate(180deg)";
    }

}