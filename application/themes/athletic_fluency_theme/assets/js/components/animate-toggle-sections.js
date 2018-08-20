exports.init = init;

function init() {
    initializeMouseOverListeners();
    onInitialSectionOpen();
    onSwitchSections();
    onResetSections();
}

function initializeMouseOverListeners() {
    $("#details_section .btn-wrapper").mouseover(function() {
        $(this).parent().parent('.half-item').css('flex-grow', '2');
        $('button', $(this)).addClass('hovered');
    });

    $("#details_section .btn-wrapper").mouseleave(function() {
        $(this).parent().parent('.half-item').css('flex-grow', '1');
        $('button', $(this)).removeClass('hovered');
    });
}

function onInitialSectionOpen() {
    $("#details_section .toggle_section").click(function() {
        let id = $(this).data('area-id');

        $('#details_section .half-item .content')
            .fadeOut('fast')
            .promise()
            .done(function() {
                $('#details_section .half-item:not(#' + id + ')').addClass('not-focused');
                $('#' + id).addClass('focused');
            })
            .promise()
            .done(function() {
                $('#details_section .half-item:not(#' + id + ') .closed-content').fadeIn('fast');
                $('#details_section .half-item:not(#' + id + ') .closed-content').tooltip();
                $('#' + id + ' .open-content').fadeIn('fast');
            });
    });
}

function onSwitchSections() {
    $('#details_section .half-item .closed-content').click(function() {
        let id = $(this).parent().attr('id');

        $('#details_section .half-item .open-content, .half-item .closed-content')
            .fadeOut('fast')
            .promise()
            .done(function() {
                $('#' + id + ' .closed-content').tooltip('destroy');
            })
            .promise()
            .done(function() {
                $('#details_section .half-item:not(#' + id + ')').removeClass('focused').addClass('not-focused');
                $('#' + id).removeClass('not-focused').addClass('focused');
            })
            .promise()
            .done(function() {
                $('#details_section .half-item:not(#' + id + ') .closed-content').fadeIn('fast');
                $('#details_section .half-item:not(#' + id + ') .closed-content').tooltip();
                $('#' + id + ' .open-content').fadeIn('fast');
            });
    })
}

function onResetSections() {
    $("#details_section .reset_items").click(function() {
        let id = $(this).data('area-id');

        $('#details_section .half-item .open-content, .half-item .closed-content')
            .fadeOut('fast')
            .promise()
            .done(function() {
                $('#details_section .half-item').removeClass('focused').removeClass('not-focused');
            })
            .promise()
            .done(function() {
                $('#details_section .half-item .content').fadeIn('fast');
            });
    });
}