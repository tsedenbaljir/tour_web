$(function() {
    $("#transparent").on("change", function(e) {
        var id= document.getElementById("transparent").value;
        console.log(id)

        var element = document.getElementById("transparent_branch");
        if(element[0] == null){
            element.innerHTML = "";
        }else{
            element.innerHTML = "";
        }

        $.get("/admin/post/transadd_branch/get/" + id, function(e) {
            e.forEach(function(item) {
                // console.log(item);
                // omnox ni ustgagddag yum xiigeerei :)
                $("#transparent_branch").append(
                    `
                    <option id="transparent_branch_op" value="${item.id}">${item.name}</option>
                    `
                );
            });
        });
        // console.log(e.target);
    });
});
