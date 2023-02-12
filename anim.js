const scrollTop = document.querySelector("#scroll");

document.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop < 50) {
    scrollTop.style.display = "none";
  } else {
    scrollTop.style.display = "block";
  }
});

scrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

function sendMail() {
  var param = {
    firstName: document.getElementById("firstName").value,
    lastName: document.getElementById("lastName").value,
    name: firstName + "" + lastName,
    subject: document.getElementById("subject").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };
  const serviceId = "stanzy237_dev";
  const templateId = "template_vheu1y7";

  emailjs
    .sent(serviceId, templateId, params)
    .then((res) => {
      document.getElementById("firstName").value = "";
      document.getElementById("lastName").value = "";
      document.getElementById("subject").value = "";
      document.getElementById("email").value = "";
      document.getElementById("message").value = "";

      console.log(res);
      alert("Your message have been sent successfully");
    })

    .catch((err) => console.log(err));
}
