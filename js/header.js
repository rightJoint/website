$(document).ready(function() {
    $('.modal-right .modal-close').click(function () {
        $('.modal, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
    });
    $('.menuBtn span, .menuBtn img').click(function (e) {
        $('.modal.menu, .modal.menu .overlay').css({'opacity': 1, 'visibility': 'visible'});
        e.preventDefault();
    });
})