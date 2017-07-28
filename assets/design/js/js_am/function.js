var url = window.location.href;
var activePage = url;
$('.nav a').each(function () {
var linkPage = this.href;

    if (activePage == linkPage) {
    $(this).closest("li").addClass("active");
    }
});
$('#loading-ajax').hide();
$(document).ajaxSend(function() {
    $('#loading-screen').show();
    $('#loading-ajax').show();
});
$(document).ajaxStart(function() {
    $('#loading-screen').show();
    $('#loading-ajax').show();
}); 
$(document).ajaxComplete(function() {
    $('#loading-screen').hide();
    $('#loading-ajax').hide();
});

function modal_confirm(message, callback) {
    $('.modal-confirm').modal('toggle');
    $('.modal-message').html(message);
    $('#button-yes').off('click').on('click', function () {
        if (callback !== null) {
            callback();
        }
    });

    $('.modal-confirm').keypress(function(e) {
        if (e.keyCode == 13) {
            if (callback !== null) {
                callback();
            }
        }
    });
}

function modal_validasi(message) {

    $('.modal-validasi').modal('toggle');
    $('.modal-message').html(message);

}

function modal_success(message) {

    $('.modal-success').modal('toggle');
    $('.modal-message').html(message);

}

function modal_unsuccess(message) {

    $('.modal-unsuccess').modal('toggle');
    $('.modal-message').html(message);

}

function modal_alert_hm(message) {

    $('.modal-alert_hm').modal('toggle');
    $('.modal-message').html(message);

}