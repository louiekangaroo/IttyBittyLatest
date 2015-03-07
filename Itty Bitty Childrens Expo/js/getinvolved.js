$(document).ready(function() {

	$("#txtPhone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $("#btnSubmit").click(function() {
        $('#btnSubmit').attr('disabled','disabled');
        var compName = $('#company').val();
        var compType = $('#company-type option:selected').text();
        var firstName = $('#txtFName').val();
        var lastName = $('#txtLName').val();
        var jobTitle = $('#txtJobTitle').val();
        var phoneNumber = $('#txtPhone').val();
        var email = $('#txtEmail').val();
        var comments = $('#txtComments').val();
        var regType = $('input[name="regtype"]:checked').val();

        var meh = isValidEmailAddress(email);

        if (!firstName == "" && !lastName == "" && !phoneNumber == "" && !meh == false ) {
            $.ajax({ 
                type: 'post',
                url: 'process_registration.php',
                data: { company : compName,
                        comptype : compType,
                        fname : firstName,
                        lname : lastName,
                        jobtitle : jobTitle,
                        pnumber : phoneNumber,
                        eadd : email,
                        remarks : comments,
                        regtype : regType
                },
                success: function(output) {
                    if (output.indexOf("HY000/2002") > -1) {
                      alert('We are having connection issue as of the moment, please try to register later.')
                      window.location.replace("getinvolved.html#interest");
                      location.reload();
                    } else {
                      alert('Thank you for your interest...We will contact you for updates.');
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