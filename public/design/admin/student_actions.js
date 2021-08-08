$('#students_checkbox').on('change', function () {
    $('.students').prop('checked', this.checked);
});

$('.student').on('click', function () {
    if ($('.student:checked').length == $('.student').length) {
        $('#students_checkbox').prop('checked', true)
    } else {
        $('#students_checkbox').prop('checked', false)
    }
})

