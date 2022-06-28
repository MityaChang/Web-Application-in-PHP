$(document).ready(function() {
   reload_table();

   $(".btnAdd").click(function() {
      $("#addModal").modal("show");
   });

   $("#add").submit(function() {
      $.post("addModule.php", {
         modulecode: $("#addModuleCode").val(),
         modulename: $("#addModuleName").val()
      }, function(data){
         $("#add").reset();
         console.log("submitted");
         reload_table();
      }, "json");
   });

   $("#moduleTable").on("click", ".btnEdit", function() {
      let id = $(this).val();
      $("#editModal").modal("show");
      $.get("getModuleDetails.php", {
         modulecode: id
      }, function(data) {
         $("#editModuleCode").val(data.module_code);
         $("#editModuleName").val(data.module_name);
      }, "json");
   });

   $("#edit").submit(function() {
      $.post("editModule.php", {
         modulecode: $("#editModuleCode").val(),
         modulename: $("#editModuleName").val()
      }, function(data){
         if (data) {
            console.log("changed");
            reload_table();
         }
      }, "json");
   });

   $("#moduleTable").on("click", ".btnDelete", function() {
      let id = $(this).val();
      id = id.substring(1);
      $.get("deleteModule.php", {
         modulecode: id
      }, function(data) {
         console.log("delete");
         reload_table()
      }, "json");
   });
});

function reload_table() {
     $.ajax({
        type: "GET",
        url: "http://localhost/C273/C273_L10CRUD/getModules.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"
                message += "<td>" + response[i].module_code;
                message += "</td><td>" + response[i].module_name;
                message += "</td><td><button class='btnEdit btn btn-primary' value='" + response[i].module_code + "'><i class='fa fa-edit'></i>Edit";
                message += "</button>&nbsp;&nbsp;<button class='btnDelete btn btn-danger' value='>" + response[i].module_code + "'><i class='fa fa-trash'></i>Delete";
                message += "</button></td></tr>";
            }
            $("tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error" + textStatus + ":" + errorThrown);
        }
    });
  
}