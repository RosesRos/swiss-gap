import { flags, defaultFlag } from "./flags.js";

const navControlIcon = document.getElementById("nav_control_icon");
const Items = document.getElementById("section_modal_flags_body");
const defImage = document.getElementsByClassName("section_form_input_flags");
const modal = document.querySelector(".section_modal_flags");

const modalOne = () => {
  const openModals = [...document.getElementsByClassName("openModal")];
  const Modal = document.querySelector(".section_modal");
  const accept = document.getElementById("accept");
  const checkbox = document.querySelectorAll("input[type='checkbox']");
  
  openModals.forEach((item, index) => {
    item.addEventListener("click", () => {
      Modal.style.display = "block";
      document.body.classList.toggle("no-scroll");

      if (index == 0) {
        for (let chec = 0; chec < checkbox.length; chec ++) {
          checkbox[chec].checked = false;
        }
        checkbox[0].classList.add("chekit");
        checkbox[1].classList.remove("chekit");
      } else if (index == 1) {
        for (let chec = 0; chec < checkbox.length; chec ++) {
          checkbox[chec].checked = false;
        }
        checkbox[1].classList.add("chekit");
        checkbox[0].classList.remove("chekit");
      }

    });
  });

  accept.addEventListener("click", () => {
    Modal.style.display = "none";
    document.body.classList.remove("no-scroll");

    if (document.querySelector(".chekit")) {
      document.querySelector(".chekit").checked = true;
    }
  });
  
};

const modalTwo = () => {
  const openModalTwo = document.getElementById("modalTwo");
  const closeModalTwo = document.querySelector(".section_modal_flags_header_span");

  openModalTwo.addEventListener("click", () => {
    modal.style.display = "block";
    document.body.classList.toggle("no-scroll");
  });

  closeModalTwo.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.classList.remove("no-scroll");
  });
}

function validateInput() {
  let inputs = document.querySelectorAll("input[class='section_form_input']");

  for (let inp = 0; inp < inputs.length; inp++) {
    inputs[inp].addEventListener("input", () => {
      if (inputs[inp].value.length <= 2) {
        inputs[inp].style.color = "red";
        inputs[inp].style.outlineColor = "red";
      } else {
        inputs[inp].style.color = "#23272d";
        inputs[inp].style.outlineColor = "#23272d";
      }
    })
  }
  
}


const Main = () => {
  Items.innerHTML = `${flags()}`;
  navControlIcon.innerHTML = `${defaultFlag(3)}`;

  for (let defImg = 0; defImg < defImage.length; defImg++) {
    defImage[defImg].innerHTML = `${defaultFlag(3)}`;
  }

  if (document.querySelectorAll(".section_modal_flags_coco")) {
    for (let cu = 0; cu < document.querySelectorAll(".section_modal_flags_coco").length; cu++) {
        document.querySelectorAll(".section_modal_flags_coco")[cu].style.cursor = "pointer";
        document.querySelectorAll(".section_modal_flags_coco")[cu].addEventListener("click", () => {
          modal.style.display = "none";
          document.body.classList.remove("no-scroll");
          navControlIcon.innerHTML = `${defaultFlag(cu)}`;
          
          for (let defImg = 0; defImg < defImage.length; defImg++) {
            defImage[defImg].innerHTML = `${defaultFlag(cu)}`;
          }
        })
    } 
}
}



modalOne();
modalTwo();
validateInput();
Main();


