/* ==================================================
-+-+-+-+-+ filter-section start hear +-+-+-+-+-
================================================== */
function applyFilters() {
  var category = document.getElementById("category").value;
  var location = document.getElementById("location").value;
  var type = document.getElementById("type").value;
  var salary = document.getElementById("salary").value;
}

/* ==================================================
-+-+-+-+-+ View job details +-+-+-+-+-
================================================== */
const jobBoxes = document.querySelectorAll('.job-box');
const popups = document.querySelectorAll('.popup');
const more = document.getElementsByClassName('more');
const closeButtons = document.querySelectorAll('.close-popup');


const knowMore = (srno)=>{
  const jobCount = srno;
  const popup = document.querySelector('#popup-' + jobCount);
  popup.style.display = 'flex';
  console.log('working')
}

closeButtons.forEach((closeButton) => {
    closeButton.addEventListener('click', (event) => {
        const clickedCloseButton = event.currentTarget;
        const popupId = clickedCloseButton.getAttribute('data-popup-id');
        const popup = document.querySelector('#popup-' + popupId);
        popup.style.display = 'none';
    });
});

/* ==================================================
-+-+-+-+-+ Resposive navbar component +-+-+-+-+-
================================================== */

const mobileNavbar = document.querySelector(".mobile-navbar-btn");
const navbar = document.querySelector(".navbar");

if (mobileNavbar && navbar) {
    mobileNavbar.addEventListener("click", () => {
        navbar.classList.toggle("active");
        mobileNavbar.classList.toggle("nav-activ-btn");
    });
}

// const mobileNavbar = document.querySelector(".mobile-navbar-btn");
// const navbar = document.querySelector(".navbar");

// mobileNavbar.addEventListener("click", () => {
//   navbar.classList.toggle("active");
//   mobileNavbar.classList.toggle("nav-activ-btn");
// });