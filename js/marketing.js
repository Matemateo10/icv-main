function scrollToClass() {
    var elements = document.getElementsByClassName('portal-jump');

    if (elements.length > 0) {
        console.log('Element found, attempting to scroll:', elements[0]);
        setTimeout(function() {
            elements[0].scrollIntoView({ behavior: 'smooth' });
        }, 10); // Adjust the delay as needed
    } else {
        console.error('No elements found with class "portal-jump".');
    }
}

/* Open Contact Form */

function openForm(){

    var openForm = document.getElementById("forma-o-z")

    openForm.style.display = "flex";
    setTimeout(function() {
      openForm.style.opacity = "1";
    }, 100);
  }

  function closeForm() {

    var closeForm = document.getElementById("forma-o-z");

    closeForm.style.display = "none";

    closeForm.style.opacity = "0";
  }

/* Open Marketing */

function openMarketing1(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main");
    var div = document.getElementById("m-d-1");
    var imgBlack = document.getElementById("m-2i1");
    var ponuda1 = document.getElementById("ponuda-a");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
      
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
      
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
    }
  }
  
  function openMarketing2(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main-2");
    var div = document.getElementById("m-d-2");
    var imgBlack = document.getElementById("m-2i1-1");
    var ponuda1 = document.getElementById("ponuda-b");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
  
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
  
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
      
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
  }}
  
  function openMarketing3(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main-3");
    var div = document.getElementById("m-d-3");
    var imgBlack = document.getElementById("m-2i1-2");
    var ponuda1 = document.getElementById("ponuda-c");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
      
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
  
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
      
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
  }}
  
  function openMarketing4(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main-4");
    var div = document.getElementById("m-d-4");
    var imgBlack = document.getElementById("m-2i1-3");
    var ponuda1 = document.getElementById("ponuda-d");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
      
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
  
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
      
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
  }}
  
  function openMarketing5(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main-5");
    var div = document.getElementById("m-d-5");
    var imgBlack = document.getElementById("m-2i1-4");
    var ponuda1 = document.getElementById("ponuda-e");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
      
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
  
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
      
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
  }}
  
  function openMarketing6(event) {
    event.preventDefault(); 
  
    var marketingGlavni = document.getElementById("marketing-padajuci-main-6");
    var div = document.getElementById("m-d-6");
    var imgBlack = document.getElementById("m-2i1-5");
    var ponuda1 = document.getElementById("ponuda-f");
  
    var screenWidth = window.innerWidth;
  
    if (marketingGlavni.style.display === "none") {
      marketingGlavni.style.display = "block";
      
      if (screenWidth >= 1024) {
        div.style.gridColumn = "span 3";
      } else if (screenWidth >= 700) {
        div.style.gridColumn = "span 2";
      } else {
        div.style.gridColumn = "span 1";
      }
  
      div.classList.remove("disable-hover");
      div.classList.remove("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(-90deg)";
      ponuda1.style.justifyContent = "center";
      ponuda1.style.gap = "10px";
      
    } else {
      marketingGlavni.style.display = "none";
      div.style.gridColumn = "span 1";
      div.classList.add("disable-hover");
      div.classList.add("hover-hide-white-arr");
      imgBlack.style.transform = "rotate(0deg)";
      ponuda1.style.justifyContent = "space-between";
      ponuda1.style.gap = "0px";
  }}
  