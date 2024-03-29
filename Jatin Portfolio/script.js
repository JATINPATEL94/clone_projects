/* ==================================================
-+-+-+-+-+ Resposive navbar component +-+-+-+-+-
================================================== */

const mobileNavbar = document.querySelector(".mobile-navbar-btn");
const navbar = document.querySelector(".navbar");

mobileNavbar.addEventListener("click", () => {
  navbar.classList.toggle("active");
  mobileNavbar.classList.toggle("nav-activ-btn");
});

/* ==================================================
-+-+-+-+-+ Protfolio section start +-+-+-+-+-
================================================== */

function filterProjects(btnNum) {
  const projectImages = document.querySelectorAll(
    ".portfolio-image .img-overlay"
  );
  const buttons = document.querySelectorAll(".p-btns .btn");

  buttons.forEach((button) => {
    // Remove the transformation style and box shadow from all buttons
    button.style.transform = "none";
    button.style.boxShadow = "none";
  });

  projectImages.forEach((image) => {
    if (btnNum === 1) {
      // Show all images
      image.style.display = "block";
    } else {
      // Hide images that don't match the selected filter
      const imageBtnNum = image.classList[1].split("--")[1];
      if (btnNum !== parseInt(imageBtnNum)) {
        image.style.display = "none";
      } else {
        image.style.display = "block";
      }
    }
  });

  // Apply the transformation style and box shadow to the clicked button
  buttons.forEach((button) => {
    if (button.getAttribute("data-btn-num") === btnNum.toString()) {
      button.style.transform = "translateY(-0.5rem)";
      button.style.boxShadow = ".5rem 1rem 1rem 0rem rgba(132, 144, 255, 0.3)";
    }
  });
}

/* ==================================================
-+-+-+-+-+ new section start +-+-+-+-+-
================================================== */
