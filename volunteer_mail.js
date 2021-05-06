const volunteer_form = document.forms.volunteer_form; // Volunteer form html dom element

//When form submission is clicked
volunteer_form.addEventListener('submit', function (e) {

  e.preventDefault();

  // Get form data 
  let fname = this.fname.value;
  let lname = this.lname.value;
  let eaddress = this.eaddress.value;
  let sncg = this.sncg.value;
  let gpa = this.gpa.value;
  let legal = this.legal.value;
  let message = this.message.value;
  let it = this.it.value;
  var submit_btn = document.querySelector('.sqs-editable-button');
  
  var subjectsCheckbox = this.tc;

  // Get form checkbox details
  let markedSubjects = [];

  for (let subject of subjectsCheckbox) {
      if (subject.checked) {
          markedSubjects.push(subject.value);
      }
  }
  
  submit_btn.value = 'Loading';

  Email.send({
    SecureToken: "a2bdd682-df33-44bc-848d-0316cfb02656", // An encryption of sender's email, password. That is, an encryption of rocketaccomplish@gmail.com and password with an email server  as it will be dangerous to disclose openly here.
    To: 'rocketaccomplish@gmail.com', // your email addresss (as receiver's email) 
    From: 'rocketaccomplish@gmail.com', // your email address (as sender's email or email used with an email server)
    Subject: "Volunteer Form - Rocket Accomplish",
    Body: "<html><h2>Volunteer Form Submission</h2><strong>First Name: </strong>" + fname + "<br><strong>Last Name: </strong>" + lname + "<br><strong>Email: </strong>" + eaddress + "<br><br><strong>School and Current Grade: </strong>" + sncg + "<br><strong>What is your average GPA for the past school year?: </strong>" + gpa + "<br><strong>What are the subjects that you are interested in tutoring/coaching?: </strong>" + markedSubjects.join(', ') + "<br><strong>Please provide your legal guardian's contact information: </strong>" + legal + "<br><strong>Please write 2-5 sentences about yourself: </strong>" + it  + "<br><strong>please provide the full name of the individual/teacher: </strong>" + message + "</html>",
  }).then(
    message => {
      console.log(message);
      submit_btn.value = 'Submit';
      // if email was successfully sent
      if (message == "OK") {
        volunteer_form.reset();
        document.querySelector('.form-submission-text').classList.remove('hidden');
      } else { // if email was unsuccessfully sent 
        alert('submission failure! please try again...'); 
      }
    }
  );
});
