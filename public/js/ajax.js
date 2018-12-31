$(document).ready(function () {
    $('button.send').on('click', function () {
        var nameValue = $('input.name').val();
        var emailValue = $('input.email').val();
        var commentValue = $('textarea.comment').val();
        $.ajax({
            method: "POST",
            url: "check.php",
            data: {nameValue: nameValue, emailValue: emailValue, commentValue: commentValue}
        })
            .done(function (card) {
                $('.card-deck').prepend(card);
                if (!card) {
                $('.alert1').append('<div class="alert alert-warning alert-dismissible fade show" role="alert">\n' +
                    '  <strong></strong>Поля формы заполнены не корректно\n' +
                    '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '    <span aria-hidden="true">&times;</span>\n' +
                    '  </button>\n' +
                    '</div>')
                }
            });
        $('input.name').val('');
        $('input.email').val('');
        $('textarea.comment').val('');

    })
});