document.addEventListener('DOMContentLoaded', function() {
  // Function to add the class while preserving existing classes
  function addClassPreserveExisting(element, newClass) {
    if (!element.classList.contains(newClass)) {
      element.classList.add(newClass);
    }
  }

  const urlPath = window.location.pathname; // Get the relative URL path

  // Define the mapping between URL paths and class names
  const urlClassMapping = new Map([
    // Vijesti
    ["/vijesti/", "vijesti-c-c"],
    ["/vijesti/aktualno/", "aktualno-c-c"],
    ["/vijesti/crna-kronika/", "crna-kronika-c-c"],
    ["/vijesti/hrvatska/", "hrvatska-c-c"],
    ["/vijesti/politika/", "politika-c-c"],
    ["/vijesti/vjerski-zivot/", "vjerski-zivot-c-c"],
    ["/vijesti/zanimljivosti/", "zanimljivosti-c-c"],
    ["/vijesti/fotka-dana/", "fotka-dana-c-c"],

    // Virovitica
    ["/virovitica/", "virovitica-c-c"],
  
    // Zupanije
    ["/zupanije/", "zupanije-c-c"],
    ["/zupanije/viroviticko-podravska-zupanija/", "vpz-c-c"],
    ["/zupanije/koprivnicko-krizevacka-zupanija/", "kkz-c-c"],
    ["/zupanije/osjecko-baranjska-zupanija/", "obz-c-c"],

    // Općine
    ["/opcine/", "opcine-c-c"],
    ["/opcine/pitomaca-suhopolje-s-bukovica-gradina-lukac/", "pitomaca-c-c"],
    ["/opcine/slatina-sopje-cadavica-vocin-n-bukovica/", "slatina-c-c"],
    ["/opcine/orahovica-cacinci-mikleus-zdenci-crnac/", "orahovica-c-c"],
  
    // Sport
    ["/sport/", "sport-c-c"],
    ["/sport/nogomet/", "nogomet-c-c"],
    ["/sport/rukomet-kosarka/", "kosarka-c-c"],
    ["/sport/ostali-sportovi/", "ostali-sportovi-c-c"],
    ["/sport/sportski-vremeplov/", "sportski-vremeplov-c-c"],
    ["/sport/skolski-sport/", "skolski-sport-c-c"],
  
    // Promo
    ["/promo/", "promo-c-c"],
  
    // Marketing
    ["/marketing/", "marketing-c-c"],
  
    // ICV Radio
    ["/icv-radio/", "radio-c-c"],
    ["/icv-radio/cestitke-i-zelje/", "cestitke-c-c"],
    ["/icv-radio/sms-glazbene-zelje/", "sms-c-c"],
    ["/icv-radio/program/", "program-c-c"],

  
    // Posljednji pozdrav
    ["/posljednji-pozdrav/", "posljednji-c-c"],

    // Impressum i ostali
    ["/impressum/", "impressum-c-c"],
    ["/pristup-informacijama", "pristup-informacijama-c-c"],
    ["/pravila-ponasanja/", "pravila-ponasanja-c-c"],
    ["/uvjeti-koristenja/", "uvjeti-koristenja-c-c"],
    ["/vazni-dokumenti/", "vazni-dokumenti-c-c"],
    ["/kontakt/", "kontakt-c-c"],
  ]);

  // Iterate through the URL mappings and apply the classes to the elements
  for (const [url, className] of urlClassMapping) {
    if (urlPath.includes(url)) {
      const elements = document.getElementsByClassName(className);
      let colorClass = "text-color-red"; // Default color class

      // Change color class based on URL path
      if (url.includes("/sport/")) {
        colorClass = "text-color-green";
      } else if (url.includes("/promo/")) {
        colorClass = "text-color-gold";
      }

      for (let i = 0; i < elements.length; i++) {
        addClassPreserveExisting(elements[i], colorClass);
      }
    }
  }
});
