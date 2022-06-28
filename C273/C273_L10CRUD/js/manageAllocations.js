$(document).ready(function () {
    $.get("getModules.php", {}, function (data) {
        var message = "<option value='0'> --- Please Select a Module --- </option>";
        data.forEach(i => {
            message += "<option value='" + i.module_code + "'>" + i.module_code + " " + i.module_name + "</option>"
        });
        $("#modules").html(message);
        $("#addModuleAllocaton").html(message);
    }, "json");

    $("#modules").change(function () {
        console.log($("#modules").val());
        reload_table();
    });

    $.get("getStudents.php", {}, function (data) {
        var message = "<option value='0'> --- Please Select a Student ID --- </option>";
        data.forEach(i => {
            message += "<option value='" + i.student_id + "'>" + i.student_id + " " + i.first_name + " " + i.last_name + "</option>"
        });
        $("#addStudentId").html(message);
    }, "json");

    $(".btnAdd").click(function () {
        $("#addModal").modal("show");
    });

    $("#add").submit(function () {
        $.post('addAllocation.php', {
            studentid: $("#addStudentId").val(),
            modulecode: $("#addModuleAllocaton").val(),
            class: $("#addClassAllocation").val()
        }, function (data) {
            console.log("success");
            reload_table();
        }, "json");
    })

    $("#allocateTable").on("click", ".btnEdit", function () {
        let id = $(this).val();
        $("#editModal").modal("show");
        $("#editStudentCode").val(id);
        $("#editModuleAllocaton").val($("#modules").val());
    });

    $("#edit").submit(function () {
        $.post('editAllocation.php', {
            studentid: $("#editStudentCode").val(),
            modulecode: $("#editModuleAllocaton").val(),
            class: $("#editClassAllocation").val()
        }, function (data) {
            console.log("success");
            reload_table();
        }, "json");
    });

    $("#allocateTable").on("click", ".btnDelete", function () {
        let id = $(this).val();
        console.log(id);
        id = id.substring(1);
        $.get("deleteAllocation.php", {
            modulecode: $("#modules").val(),
            studentid: id
        }, function (data) {
            reload_table()
        }, "json");
    });
});

function reload_table() {
    $.get("getStudentsByModule.php", {
        module_code: $("#modules").val()
    }, function (data) {
        var message = "";
        data.forEach(i => {
            message += "<tr>"
            message += "<td>" + i.student_id;
            message += "</td><td>" + i.first_name;
            message += "</td><td>" + i.last_name;
            message += "</td><td>" + i.class;
            message += "</td><td><button class='btnEdit btn btn-primary' value='" + i.student_id + "'><i class='fa fa-edit'></i>Edit";
            message += "</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btnDelete btn btn-danger' value='>" + i.student_id + "'><i class='fa fa-trash'></i>Delete";
            message += "</button></td></tr>"
        });
        $("tbody").html(message);
    }, "json")

}