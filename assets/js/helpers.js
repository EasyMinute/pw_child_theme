import 'select2/dist/css/select2.min.css'; // Import the Select2 CSS
import $ from 'jquery';
import 'select2';

$(document).ready(function ($) {
    $('.wpcf7 select').select2({
        minimumResultsForSearch: -1,
    });

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        let redirectUrl = document.querySelector('#contact_redirect_url').value;
        console.log('val', redirectUrl)
        if (redirectUrl) {
            window.location.href = redirectUrl;
        }
    }, false );
});