$(document).ready(function() {
    var champsRequired = ["nom", "prenom", "email", "type"];
    var notNeedClassValid = ["type"];
    $("#form-preinscription input").change(function(e){
        $(this).removeClass("is-invalid");
        $(this).removeClass("is-valid");
        if ($(this).val() == "" && $.inArray($(this).attr("name"), champsRequired) !== -1) {
            $(this).addClass("is-invalid");
        }
        else if ($.inArray($(this).attr("name"), notNeedClassValid) == -1) {
            $(this).addClass("is-valid");
        }
    })
	$("#form-preinscription").submit(function(e){
        e.preventDefault();
        var inputs = $(this).find("input");
        var message = $(this).find(".alert");
        message.addClass("d-none");
        message.html('');
        message.removeClass("alert-danger");
        message.removeClass("alert-success");
        //Parcours chaque input pour voir si il vide et si c'est un champ obligatoire
        var error = false; 
        inputs.each(function(index) {
            $(this).removeClass("is-invalid");
            $(this).removeClass("is-valid");
            if ($(this).val() == "" && $.inArray($(this).attr("name"), champsRequired) !== -1) {
                $(this).addClass("is-invalid");
                error = true; 
            }
        });

        if (error) {
            message.html("Merci de remplir tous les champs obligatoires");
            message.addClass("alert-danger");
            message.removeClass("d-none");
            return false;
        }

        //AJAX
        $.ajax({
            url : './ajax/preinscription/new.php',
            type : 'POST', 
            data : $(this).serializeArray(), 
            dataType: "JSON",
            success : function(data){
                if (data.code == 200) {
                    message.html(data.message);
                    message.addClass("alert-success");
                }
                else{
                    message.html(data.message);
                    message.addClass("alert-danger");
                }
                message.removeClass("d-none");
            },
            error:function(msg){
                console.log(msg); 
            }
        });

    })
});