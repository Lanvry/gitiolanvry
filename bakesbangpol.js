/*
/* menu */
AOS.init();
function getMenumanager(id) {
    showBasedModal();
    $.ajax({
        type: 'GET',
        url: APP_URL + '/nuqi/kontak/' + id,
        dataType: "html",
        success: function (html) {
            $("#navbar_based_modal_content").html(html);
        },
        error: function (err) {
            $("#navbar_based_modal_content").html(
                `<div style="text-align:center; font-size:1.5rem">isi</div>`
            );
            console.log(err)
        }
    })
}

/* profile */
function getProfil(id) {
    showBasedModal();
    $.ajax({
        type: 'GET',
        url: APP_URL + '/nuqi/profil/' + id,
        dataType: "html",
        success: function (html) {
            $("#navbar_based_modal_content").html(html);
        },
        error: function (err) {
            $("#navbar_based_modal_content").html(
                `<div style="text-align:center; font-size:1.5rem">isi</div>`
            );
            console.log(err)
        }
    })
}
