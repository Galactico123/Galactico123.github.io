const contact_form = document.forms.js_contact_form; // Contact form dom element

contact_form.addEventListener('submit', function (e) {
  e.preventDefault();

  // Form Details
  let fname = this.fname.value;
  let lname = this.lname.value;
  let email_from = this.eaddress.value;
  let about = this.waycua.value;
  let message = this.message.value;
  var submit_btn = document.querySelector('.sqs-editable-button');

  submit_btn.value = 'Loading';

  // Smtp email function
  Email.send({
    SecureToken: "<a2bdd682-df33-44bc-848d-0316cfb02656>", // An encryption of sender's email, password. That is, an encryption of rocketaccomplish@gmail.com and password with an email server  as it will be dangerous to disclose openly here.
    To: 'rocketaccomplish@gmail.com', // your email addresss (as receiver's email) 
    From: 'rocketaccomplish@gmail.com', // your email address (as sender's email or email used with an email server)
    Subject: "New Contact Form - Rocket Accomplish",
    Body: "<html><h2>New Contact Form Submission</h2><strong>First Name: </strong>" + fname + "<br><strong>Last Name: </strong>" + lname + "<br><strong>Email: </strong>" + email_from + "<br><br><strong>What are you contacting us about?: </strong>" + about + "<br><strong>Message: </strong>" + message + "</html>",
  }).then(
    message => {
      submit_btn.value = 'Submit';
      // if email was successfully sent
      if (message == "OK") {
        contact_form.reset();
        document.querySelector('.form-submission-text').classList.remove('hidden');
      } else { alert('submission failure! please try again...'); } // if email was unsuccessfully sent 
    }
  );
});
