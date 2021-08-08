$(document).ready(function () {
    $('#all_students_checkbox').change(function () {
        $('.student_checkbox').prop('checked',this.checked);
    });
    
    $('.student_checkbox').change(function () {
     if ($('.student_checkbox:checked').length == $('.student_checkbox').length){
      $('#all_students_checkbox').prop('checked',true);
     }
     else {
      $('#all_students_checkbox').prop('checked',false);
     }
    });



    
});

