$( "#submitfrm" ).click(function(e) {
    var frm = $('#contactForm1');
    var sEmail = $('#inputEmail4').val();
    var sPhone = $('#inputphone').val();
    var sName = $('#inputName').val();
    var smsg = $('#inputMessage').val();
    function validateEmail(sEmail) {

var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

if (filter.test(sEmail)) {

return true;

}

else {

return false;
    }}
    if ($.trim(sEmail).length == 0) {

        alert('Please enter valid email address');

        e.preventDefault();

    }
    else if ($.trim(sPhone).length == 0) {

        alert('Please enter valid Phone Number');

        e.preventDefault();

    }
else if ($.trim(sName).length == 0) {

        alert('Please enter valid NAME');

        e.preventDefault();

    }

    
    

    else if (validateEmail(sEmail)) {

        

    

e.preventDefault();
$.ajax({
type: frm.attr('method'),
url: "email.php",
data: frm.serialize(),
success: function (data) {
console.log('Submission was successful.');
$('#contactForm1').text("Thanks for contacting us our executives will get back to you shortly");
},
error: function (data) {
console.log('An error occurred.');
console.log(data);
},
});


    }
    else {

        alert('Invalid Email Address');

        e.preventDefault();

    }

});