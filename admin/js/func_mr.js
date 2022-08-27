function showMaterial() {
    var html = '<i class="fas fa-spinner fa-spin"></i>';
    $('#loadmvt').html(html);
    var category = $('#genreid').val();
    //console.log(genreid);
    $.ajax({
        method: 'POST',
        url: 'data/material/get_material.php',
        data: {
            category
        },
        success: function (result) {
            $('#select-material').html(result);
            $('#loadmvt').html("");
            //console.log(result);
        }
    });
}

// function showMaterialId() {
//     var materialid = $('#material-name').val();
//     //console.log(materialid);
//     $('#materialid').val(materialid);
// }

function addMaterialClear() {
    var html = '<select class="form-control" id="material-id" readonly>';
    html += '<option></option>';
    html += '</select>';
    $('#result').html("");
    $('#genreid').val("");
    $('#select-material').html(html);
    $('#materialid').val('');
    $('#material-name').val('');
    $('#unit').val('');
    $('#specification').val('');
}

function addMaterialSave(){
    
    var genreid = $('#genreid').val();
    var materialid = $('#material-id').val();
    var materialname = $('#material-name').val();
    var dt = $('#dt').val();
    var unit = $('#unit').val();
    var specification = $('#specification').val();
    $.ajax({
        url: "data/material/material_save.php",
        type: "post",
        dataType: "text",
        data: {
            genreid,
            materialid,
            materialname,
            dt,
            unit,
            specification
        },
        success: function (result) {
            $('#result').html(result);
        }
    });
    

}