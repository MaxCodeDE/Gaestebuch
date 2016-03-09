function showHome() {
    
    hideAll();

    $('#startseite').slideDown('slow');
}

function showGuestbook() {
    
    hideAll();

    $('#guestbook-header').slideDown('slow');
    $('#guestbook').slideDown('slow');
    $('#schreiben').show();
}

function showFAQ() {
    
    hideAll();
    
    $('#faq').slideDown('slow');
    
}


function showEntwickler() {
    
    hideAll();
    
    //Show
    
}


function hideAll() {
    
    //Startseite.html
    $('#startseite').hide();
    
    //Gaestebuch.html
    $('#guestbook-header').hide();
    $('#guestbook').hide();
    $('#schreiben').hide();
    
    //FAQ.html
    $('#faq').hide();
    
    
}


function showGeschrieben(error) {
    
    if (!error) {
    
        swal({
            title: 'Inkorrekte eingabe!',
            text : 'Bitte pruefe deine Eingaben!',
            type: 'error',
            confirmButtonText: "Ok",
            closeOnConfirm: true 
        });
        
    } else {
        swal("Gepostet!", "Eintrag erfolgreich geschrieben!", "success");
    }
    
}