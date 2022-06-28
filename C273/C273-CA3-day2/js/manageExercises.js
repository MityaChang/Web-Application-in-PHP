$(document).ready(function () {

    reload_table();
});

function reload_table() {
    $.ajax({
        type: "GET",
        url: "getExercises.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            var total_Distance = 0;
            var total_Min = 0;
            for (i = 0; i < response.length; i++) {
                total_Distance += Number(response[i].distance);
                total_Min += Number(response[i].duration);
                message += "<tr>"
                message += "<td>" + response[i].exercise_id;
                message += "</td><td>" + response[i].type;
                if (response[i].type === "run") {
                    message += "<td>" + "<i class='fab fa-html5'</i></td>"
                } else {
                    message += "<td>" + "<i class='fab fa-amazon'</i></td>"
                }
                message += "</td><td>" + response[i].distance;
                message += "</td><td>" + response[i].duration;
//                message += "</td><td><button class='btnEdit btn btn-primary' value='" + response[i].exercise_id + "'><i class='fa fa-edit'></i>Edit";
//                message += "</button>&nbsp;&nbsp;<button class='btnDelete btn btn-danger' value='>" + response[i].exercise_id + "'><i class='fa fa-trash'></i>Delete";
                message += "</button></td></tr>";
            }
            message += "<tr><td colspan='4'> Total Distance </td>" + "<td>" + total_Distance + " KM</td>" + "</td></tr>"
            message += "<tr><td colspan='4'> Total Duration </td>" + "<td>" + total_Min + " Minute</td>" + "</td></tr>"
            $("tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error" + textStatus + ":" + errorThrown);
        }

    });

}


