$(document).ready(function () {
    $('#btn-logout').on('click', function () {
        logout();
    });

    $('form').on('submit', function (event) {
        event.preventDefault();
    });
});

function show_status(json_data) {
    if (json_data.status) {
        $('#status').addClass('success');
        $('#status').removeClass('failed');
    } else {
        $('#status').addClass('failed');
        $('#status').removeClass('success');
    }
    $('#status').html(json_data.status_value);
    $('#status').animate(
        {
            height: '65',
            'line-height': '65px',
            opacity: '1',
        },
        500
    );
    $('#status').delay(1000).animate(
        {
            opacity: '0',
            height: '0',
            'line-height': '0px',
        },
        500
    );
}

function logout() {
    var url = 'index.php?action=logout';
    var data = {
        confirm: true,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        show_status(json_data);
        if (json_data.status) {
            setTimeout(function () {
                window.location.replace('index.php');
            }, 1500);
        }
    };
    $.post(url, data, success);
}

function valid_username_or_email(value, elem) {
    var url = 'index.php?action=valid_username_or_email';
    var data = {
        usr_or_email: value,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        if (json_data.status) {
            $('#valid-' + elem + '-true').removeClass('hidden');
            $('#valid-' + elem + '-false').addClass('hidden');
        } else {
            $('#valid-' + elem + '-false').removeClass('hidden');
            $('#valid-' + elem + '-true').addClass('hidden');
        }
    };
    $.get(url, data, success);
}

function valid_grade_name(value, elem) {
    var url = 'index.php?action=valid_grade_name';
    var data = {
        grade_name: value,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        if (json_data.status) {
            $('#valid-' + elem + '-true').removeClass('hidden');
            $('#valid-' + elem + '-false').addClass('hidden');
        } else {
            $('#valid-' + elem + '-false').removeClass('hidden');
            $('#valid-' + elem + '-true').addClass('hidden');
        }
    };
    $.get(url, data, success);
}

function valid_subject_name(value, elem) {
    var url = 'index.php?action=valid_subject_name';
    var data = {
        subject_name: value,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        if (json_data.status) {
            $('#valid-' + elem + '-true').removeClass('hidden');
            $('#valid-' + elem + '-false').addClass('hidden');
        } else {
            $('#valid-' + elem + '-false').removeClass('hidden');
            $('#valid-' + elem + '-true').addClass('hidden');
        }
    };
    $.get(url, data, success);
}

function select_teacher() {
    var url = 'index.php?action=get_list_teachers';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=teacher_id]');
        sl.empty();
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' + value.id + '">' + value.name + '</option>'
            );
        });
    };
    $.get(url, success);
}

function select_test_code() {
    var url = 'index.php?action=get_list_test_codes';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=test_code]');
        sl.empty();
        sl.append('<option value="" selected disabled>Chọn Mã đề</option>');
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' +
                    value.test_code +
                    '">' +
                    value.test_code +
                    '</option>'
            );
        });
    };
    $.get(url, success);
}

function select_grade() {
    var url = 'index.php?action=get_list_grades';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=grade_id]');
        sl.empty();
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' + value.id + '">' + value.name + '</option>'
            );
        });
    };
    $.get(url, success);
}

function select_gender() {
    var url = 'index.php?action=get_list_genders';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=gender_id]');
        sl.empty();
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' + value.id + '">' + value.name + '</option>'
            );
        });
    };
    $.get(url, success);
}

function select_subject() {
    var url = 'index.php?action=get_list_subjects';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=subject_id]');
        sl.empty();
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' + value.id + '">' + value.name + '</option>'
            );
        });
        $('select').select();
    };
    $.get(url, success);
}

function select_class(data) {
    var url = 'index.php?action=get_list_classes';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=class_id]');
        sl.empty();
        sl.append(
            sl.append('<option value="" selected disabled>Chọn Lớp</option>')
        );
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' +
                    value.id +
                    '">' +
                    value.class_name +
                    '</option>'
            );
        });
    };
    $.get(url, success);
}

function select_status() {
    var url = 'index.php?action=get_list_statuses';
    var success = function (result) {
        var json_data = $.parseJSON(result);
        var sl = $('select[name=status_id]');
        sl.empty();
        $.each(json_data, function (key, value) {
            sl.append(
                '<option value="' +
                    value.status_id +
                    '">' +
                    value.detail +
                    '</option>'
            );
        });
        $('select').select();
    };
    $.get(url, success);
}

function valid_class_name(value) {
    var url = 'index.php?action=valid_class_name';
    var data = {
        class_name: value,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        if (json_data.status) {
            $('#valid-class-true').removeClass('hidden');
            $('#valid-class-false').addClass('hidden');
        } else {
            $('#valid-class-false').removeClass('hidden');
            $('#valid-class-true').addClass('hidden');
        }
    };
    $.get(url, data, success);
}

function valid_email_on_profiles(data) {
    var new_email = $('#profiles-new-email').val();
    var current_email = $('#profiles-current-email').val();
    var url = 'index.php?action=valid_email_on_profiles';
    var data1 = {
        new_email: new_email,
        current_email: current_email,
    };
    var success = function (result) {
        var json_data = $.parseJSON(result);
        if (json_data.status) {
            $('#valid-email-true').removeClass('hidden');
            $('#valid-email-false').addClass('hidden');
        } else {
            $('#valid-email-false').removeClass('hidden');
            $('#valid-email-true').addClass('hidden');
        }
    };
    $.post(url, data1, success);
}
