$(document).ready(function(){

    //Introduction Page 'Next' button
    $('#btn_intro').click(function() {
        $('#list_intro').removeClass('active_tb');
        $('#list_intro').addClass('inactive_tb');
        $('#list_tnc').removeClass('inactive_tb');
        $('#list_tnc').addClass('active_tb');

        $('#intro').removeClass('active');
        $('#intro').addClass('inactive');
        $('#tnc').removeClass('inactive');
        $('#tnc').addClass('active');
    });

    //TnC Page 'Back' button
    $('#btn_tnc_bck').click(function() {
        $('#list_tnc').removeClass('active_tb');
        $('#list_tnc').addClass('inactive_tb');
        $('#list_intro').removeClass('inactive_tb');
        $('#list_intro').addClass('active_tb');

        $('#tnc').removeClass('active');
        $('#tnc').addClass('inactive');
        $('#intro').removeClass('inactive');
        $('#intro').addClass('active');
    });

    //TnC Page 'Next' button
    $('#btn_tnc').click(function() {
        if($('#tnc_check').is(':checked')) {
            $('#tnc_error').text('');
            $('#tnc_error').removeClass('has-error');
            $('#list_tnc').removeClass('active_tb');
            $('#list_tnc').addClass('inactive_tb');
            $('#list_patient_type').removeClass('inactive_tb');
            $('#list_patient_type').addClass('active_tb');

            $('#tnc').removeClass('active');
            $('#tnc').addClass('inactive');
            $('#patient_type').removeClass('inactive');
            $('#patient_type').addClass('active');
        }
        else {
            $('#tnc_error').text('Please accept before proceeding.');
            $('#tnc_error').addClass('has-error');
        }
    });

    //Patient Type Page 'Back' button
    $('#btn_ptype_bck').click(function() {
        $('#list_patient_type').removeClass('active_tb');
        $('#list_patient_type').addClass('inactive_tb');
        $('#list_tnc').removeClass('inactive_tb');
        $('#list_tnc').addClass('active_tb');

        $('#patient_type').removeClass('active');
        $('#patient_type').addClass('inactive');
        $('#tnc').removeClass('inactive');
        $('#tnc').addClass('active');
    });

    //Patient Type Page 'Next' button
    $('#btn_patient_type').click(function() {
        var error_name = '';
        
        if($.trim($('#name').val()).length == 0)
        {
            error_name = 'Name is required';
            $('#error_name').text(error_name);
            $('#name').addClass('has-error');
        }
        else
        {
            error_name = '';
            $('#error_name').text(error_name);
            $('#name').removeClass('has-error');
        }
        
        if(error_name != '')
        {
            return false;
        }
        else
        {
            $('#list_patient_type').removeClass('active_tb');
            $('#list_patient_type').addClass('inactive_tb');
            $('#list_basic_info').removeClass('inactive_tb');
            $('#list_basic_info').addClass('active_tb');

            $('#patient_type').removeClass('active');
            $('#patient_type').addClass('inactive');
            $('#basic_info').removeClass('inactive');
            $('#basic_info').addClass('active');
        }
    });

    //Basic Info Page 'Back' button
    $('#btn_basicinfo_bck').click(function() {
        $('#list_basic_info').removeClass('active_tb');
        $('#list_basic_info').addClass('inactive_tb');
        $('#list_patient_type').removeClass('inactive_tb');
        $('#list_patient_type').addClass('active_tb');

        $('#basic_info').removeClass('active');
        $('#basic_info').addClass('inactive');
        $('#patient_type').removeClass('inactive');
        $('#patient_type').addClass('active');
    });

    //Basic Info Page 'Next' button
    $('#btn_basic_info').click(function() {
        $('#list_basic_info').removeClass('active_tb');
        $('#list_basic_info').addClass('inactive_tb');
        $('#list_symptoms').removeClass('inactive_tb');
        $('#list_symptoms').addClass('active_tb');

        $('#basic_info').removeClass('active');
        $('#basic_info').addClass('inactive');
        $('#symptoms').removeClass('inactive');
        $('#symptoms').addClass('active');
    });

    //Symptoms Page 'Back' button
    $('#btn_symptoms_bck').click(function() {
        $('#list_symptoms').removeClass('active_tb');
        $('#list_symptoms').addClass('inactive_tb');
        $('#list_basic_info').removeClass('inactive_tb');
        $('#list_basic_info').addClass('active_tb');

        $('#symptoms').removeClass('active');
        $('#symptoms').addClass('inactive');
        $('#basic_info').removeClass('inactive');
        $('#basic_info').addClass('active');
    });

    //Symptoms Page 'Submit' button
    $('#btn_symptoms').click(function() {
        $('#btn_symptoms').attr("disabled", "disabled");
        $(document).css('cursor', 'progress');
        $("#medical_survey").submit();
    });
});