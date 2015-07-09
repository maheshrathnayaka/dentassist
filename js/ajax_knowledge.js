$(function () {
    var medications;
    $.ajax({
        type: 'POST',
        url: 'knowledge_profile/loadMedication',
        data: 'id=medication',
        dataType: 'json',
        cache: false,
        success: function ($result) {
            medications = $result["medication_name"];
        },
    });
    $("#txtMedicationName").autocomplete({
        source: medications
    });
});