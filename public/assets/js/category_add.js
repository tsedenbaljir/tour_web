$(function() {
    $("#service-file,#service-file-mn").on("change", function(e) {
        //get the file name
        //var fileName = $(this).val();
        var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this)
            .next(".custom-file-label")
            .html(fileName);
    });
    $("#service-reset").click(function() {
        $("#english .custom-file-label").html("Choose file");
        $("#english .fr-element.fr-view").html("");
        $("#english #id").val("0");
        $("#english #service-file").val("");
        $("#service-submit").attr("disabled", true);
        console.log("Reseting...");
    });
    // $("#service-file").on("change", function() {
    //     if (document.getElementById("service-file").files.length == 0) {
    //         $("#service-submit").attr("disabled", true);
    //     } else {
    //         $("#service-submit").attr("disabled", false);
    //     }
    // });
    // EDIT AND GET
    function getServiceEnglish() {
        console.log("Getting English services...");
        $.get("/admin/transadd/english/get", function(e) {
            e.forEach(function(item) {
                $("#english-table").append(
                    `<tr data-key=${item.id} class="english-data">
                    <td>${item.name}</td>
                    <td><a href="/admin/transadd/english/delete/${
                        item.id
                    }" class="text-danger delete-service">Delete</a></td>
                    </tr>`
                );
            });
            $(".english-table-loading").hide();
            $("#table-en").show();
        });
    }
    getServiceEnglish();
    $(".card-overlay").hide();
    $("#english-table").on("click", ".english-data", function() {
        $(".card-overlay").show();
        var id = $(this).attr("data-key");
        $("#english .fr-placeholder").hide();
        $.get("/admin/transadd/english/" + id, function(e) {
            $("#english #name").val(e.name);
            $(".card-overlay").hide();
            // $("#service-submit").attr("disabled", false);
        });
    });
    $("#english form").submit(function() {
        $(".card-overlay").show();
    });
});
