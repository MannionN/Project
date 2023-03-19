/* window.addEventListener("load", (e) => {
  const ContactForm = document.getElementById("contactForm");
  const ContactFormError = document.getElementById ("contact-error")

  ContactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData (this);
    let nameValue = formData.get('name');
    let surnameValue = formData.get('surname');
    let contactNumberValue = formData.get('contact_number');
    let emailAddressValue = formData.get('email_address');
    let messageValue = formData.get('message');
    let marketingValue = formData.get('marketing');

  })
}
)
*/

console.log('Hello');
const contactForm = document.getElementById("contactform");
contactForm.addEventListener('submit', function (event) {
event.preventDefault();
console.log('Still here!');
const formData = new FormData(contactForm)
makeRequest(formData);
// TO-DO: Throw out contact form and replace with a thank you/acknowledgement message
}
)

function makeRequest(formData){
console.log('Making request!');
const request = new XMLHttpRequest();
request.onreadystatechange = function() {
  if (request.readyState == XMLHttpRequest.DONE) {
      alert("Thank you for contacting us. We will be in touch.");
      document.getElementById("contactform").reset();
  }
}
request.open('POST', 'contact_us.php');
request.send(formData);
}
