"use strict";

$("#btn-add-role").fireModal({
    title: "Add Role",
    body: $("#modal-add-role"),
    footerClass: "bg-whitesmoke",
    autoFocus: false,
    onFormSubmit: function (modal, e, form) {
        // Form Data
        let form_data = $(e.target).serialize();

        // DO AJAX HERE
        $.post(store, form_data, function (data) {})
        .done(function(data){
            iziToast.success({
                title: "Hello, world!",
                message: data,
                position: "topRight",
            });
        })
        .fail(function(response) {
            console.log(response)
            modal.find('.modal-body').prepend(`<div class="alert alert-danger">${response.responseJSON.message}</div>`)
        })
        .always(function() {
            form.stopProgress();
        })
    },
    
    buttons: [
        {
            text: "Submit",
            submit: true,
            class: "btn btn-primary btn-shadow",
            handler: function (modal) {},
        },
    ],
});
