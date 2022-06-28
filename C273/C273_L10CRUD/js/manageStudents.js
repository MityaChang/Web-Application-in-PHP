function reload_table() {
    $.ajax({
        type: "GET",
        url: "http://localhost/C273/C273_L10CRUD/getStudents.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"
                message += "<td>" + response[i].student_id;
                message += "</td><td>" + response[i].first_name;
                message += "</td><td>" + response[i].last_name;
                message += "</td><td><button class='btnEdit btn btn-primary' value='" + response[i].student_id + "'><i class='fa fa-edit'></i>Edit";
                message += "</button>&nbsp;&nbsp;<button class='btnDelete btn btn-danger' value='>" + response[i].student_id + "'><i class='fa fa-trash'></i>Delete";
                message += "</button></td></tr>";
            }
            $("tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error" + textStatus + ":" + errorThrown);
        }

    });

}

$(document).ready(function () {
    reload_table();
    $("#add").validate({
        rules: {
            studentId: {
                required: true,
                number: /^[0-9]+$/
            },
            firstname: {
                required: true
            },
            lastname: {
                required: true
            }
        },
        messages: {
            studentId: {
                required: "Please enter your student ID",
                number: "Please enter your student ID in number"
            },
            firstname: {
                required: "Please enter your first name"
            },
            lastname: {
                required: "Please enter your last name"
            }
        },
        submitHandler: function (form) {
            $.post("addStudent.php", {
                studentid: $("#addStudentId").val(),
                firstname: $("#addFirstname").val(),
                lastname: $("#addLastname").val()
            }, function (data) {
                $('#add').modal('hide');
                reload_table();
                $("form").reset();
            }, "json")
        }

    });
    $("#defaultTable").on("click", ".btnEdit", function () {
        var id = $(this).val();
        $.get("getStudentDetails.php", {
            student_id: id
        }, function (data) {
            $("#editStudentId").val(data.student_id);
            $("#editFirstname").val(data.first_name);
            $("#editLastname").val(data.last_name);
            $("#editModal").modal("show");
        }, "json")
    });

    $("#edit").submit(function () {
        $.post("editStudent.php", {
            studentid: $("#editStudentId").val(),
            firstname: $("#editFirstname").val(),
            lastname: $("#editLastname").val()
        }, function (data) {
            reload_table();
        }, "json")
    })

    $("#defaultTable").on("click", ".btnDelete", function () {
        var id = $(this).val();
        id = id.substring(1);
        var check = confirm("Do you want to delete student id: " + id);
        if (check) {
            $.get("deleteStudent.php", {
                studentid: id
            }, function (data) {
                reload_table();
            }, "json")
        }
    });
})


