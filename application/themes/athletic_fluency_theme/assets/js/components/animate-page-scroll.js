exports.init = init;

function init(id) {
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 500);
}