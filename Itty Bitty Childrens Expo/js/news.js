$(document).ready(function() {

    $("#btnSubmit").click(function() {
        $('#btnSubmit').attr('disabled','disabled');
        var firstName = $('#txtFName').val();
        var lastName = $('#txtLName').val();
        var email = $('#txtEmail').val();

        var meh = isValidEmailAddress(email);

        if (!firstName == "" && !lastName == "" && !meh == false ) {
            $.ajax({ 
                type: 'post',
                url: 'registernewsletter.php',
                data: { 
                        eadd : email,
                        fname : firstName,
                        lname : lastName
                },
                success: function(output) {
                    if (output.indexOf("HY000/2002") > -1) {
                      alert('We are having connection issue as of the moment, please try to register later.')
                      window.location.replace("getinvolved.html#interest");
                      location.reload();
                    } else {
                      alert('Thank you for registering to our newsletter. We will send updates soon!');
                      window.location.replace("getinvolved.html#interest");
                      location.reload();
                    }
                     $('#btnSubmit').removeAttr('disabled');

                },
                error: function(xhr){
                    alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
                }
           
            });
        } else {
            $('#btnSubmit').removeAttr('disabled');
        }
        
    });

    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
    };
});