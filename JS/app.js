window.addEventListener("load", (e) => {
  const ContactForm = document.getElementById("contactForm");
  const ContactFormError = document.getElementById ("contact-error")

  ContactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData (this);
    let namevalue = FormData.get('name');
    let surnamevalue = FormData.get('surname');
    let contactNumberValue = formData.get('contact_number');
    let emailAddressValue = formData.get('email_address');
    let messageValue = formData.get('message');
    let marketingValue = formData.get('marketing');

  })
}
)