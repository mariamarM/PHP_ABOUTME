document.addEventListener("DOMContentLoaded", () => {
  const elementosCarrusel = document.querySelector(".carruselPresentacion");
  const paneles = document.querySelectorAll(".frameCarrusel");
  const infoLado = document.getElementById("sidebar");
  const sidebarContent = document.getElementById("sidebarContent");
  const closeBtn = document.getElementById("closeSidebar");

  // Abrir panel lateral al hacer click en un panel
  //osea da ogual donde le des clcic se abre igual 
  paneles.forEach(panel => {
    panel.addEventListener("click", () => {
        const sectionFile = panel.getAttribute("data-section");

      // esto pausa la animacion en plan
      //por default esta running que vuelce a girar al darle al click
      elementosCarrusel.style.animationPlayState = "paused";

      
      fetch(`sections/${sectionFile}.php`)
        .then(res => res.text())
        .then(html => {
          //mirar esto lol p'orque no me lo carga bien
          sidebarContent.innerHTML = html;
          infoLado.classList.add("open");
        })
        .catch(err => {
          sidebarContent.innerHTML = "<p>no carga/p>";
          console.error(err);
        });
    });
  });

  closeBtn.addEventListener("click", () => {
    infoLado.classList.remove("open");
    elementosCarrusel.style.animationPlayState = "running";
  });
});



