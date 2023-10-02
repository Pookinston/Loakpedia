var sibling=[];
function changeStep(element) {
  var steps = document.getElementsByClassName("steptrf");
  for (var i = 0; i < steps.length; i++) {
    steps[i].classList.remove("active");
  }
  element.classList.add("active");
}
function nextPage() {
  var currentPage = document.querySelector(".page.active");
  var nextPage = currentPage.nextElementSibling;
  if (nextPage) {
    currentPage.style.display = "none";
    currentPage.classList.remove("active");
    nextPage.classList.add("active");
    changeStep(document.querySelector(".steptrf.active").nextElementSibling);
  }
}

function previousPage() {
  var currentPage = document.querySelector(".page.active");
  var previousPage = document.querySelector(".page");
  if (previousPage) {
    currentPage.classList.remove("active");
    previousPage.classList.add("active");
    previousPage = document.querySelector(".page.active");
    previousPage.style.display = "block";
    changeStep(
      document.querySelector(".steptrf.active").previousElementSibling
    );
  }
}
function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Perform form validation
    var inputs = document.querySelectorAll('form input[required]');
    var isValid = true;

    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].value.trim() === '') {
        isValid = false;
        break;
      }
    }

    if (isValid) {
      window.location.href = '/supplierfilled';
    } else {
      alert('Please fill in all required fields.');
    }
  }

