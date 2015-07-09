$(document).ready(function() {
    $('ul.tabs').tabs();
});

$(document).ready(function() {
    $('ul.tabs').tabs('select_tab', 'tab_id');
});

$(document).ready(function() {
    $('select').material_select();
});

$(document).ready(function() {
    $('.dropdown-button').dropdown();
});

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

$(document).ready(function() {
    $('#radioFemale').click(function() {
        $('#womenHealth').show(1000);
    });
    $('#radioMale').click(function() {
        $('#womenHealth').hide(1000);
    });
});

/**
 * 
 * Function for image upload and camera access
 */
$(function() {
    $('#image').picEdit();
});

//$('#image').picEdit({
//  imageUpdated: function(img){
//     alert('Image updated!');
//  }
//});
//
//$('#image').picEdit({
//  formSubmitted: function(response){
//     alert('Form submitted!');
//  }
//});


function addImages() {
    var commentImage = $('#txtCommentImage').val();
    var descriptionImage = $('#txtDescriptionImage').val();
//    if (commentImage == null || commentImage === "") {
//        $('#txtCommentImage').css("background-color", "red");
//    }
}

$(document).ready(function() {
    var $rowCount = $('#medicationTbl tr').length;
//    if ($rowCount === 1) {
//        $('#medicationTbl').remove();
//        $('#medicationTblDiv').append('<p id="noRecord"><center>No records !</center></p>');
//        $('#medicationTbl').hide();
//    }
//    else{
//        $('#medicationTblDiv').append('<br><table id="medicationTbl"><thead><tr><th data-field="id" style="width: 350px;">Medication Name</th><th data-field="name">Dosage</th><th data-field="name">Delete</th></tr></thead><tbody></tbody></table><br>')        
//    }
});
$('#btnAddEntryMedication').click(function() {
    var $rowCount = $('#medicationTbl tr').length;
    if ($rowCount >= 0) {
//        $('#noRecord').remove();
//        $('#medicationTbl').show();
        var $medicationName = $('#txtMedicationName').val();
        var $dosage = $('#txtDosage').val();
        $('#medicationTbl tbody').append('<tr><td>' + $medicationName + '</td><td>' + $dosage + '</td><td><button type="button" name="reset" value="reset" class="light-green darken-4 waves-effect waves-light btn tooltipped" data-position="top" data-delay="50" data-tooltip="Remove this entry"><i class="mdi-action-delete"></i></button></td></tr>');
    }
});

/**
 * autocomplete for medication name
 */
$("#txtMedicationName").autocomplete(["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "pearl"], {
                                            width: 320,
                                            max: 4,
                                            highlight: false,
                                            multiple: true,
                                            multipleSeparator: " ",
                                            scroll: true,
                                            scrollHeight: 300
                                        });