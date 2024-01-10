<link rel="stylesheet" href="../css/fe/style1.css">
<script src="../js/fe/script1.js"></script>
<div id="toolbar-p-1" class="">
    <div id="toolbar-p-1" class="" style="transition: 1s all;">
        <div id="toolbar-p-1-container" class="tools-wrp-bottom-container">
            <div onclick="getProfil(1)">
                <div class="tools-wrp-bottom" id="1">
                    <div class="tool-bottom-wrp-icon">
                        <img class="tool-bottom-icon" title="PROFIL" src="../user.gif" alt="PROFIL">
                    </div>
                    <div class="tool-bottom-text" title="PROFIL">Profil</div>
                </div>
            </div>

            <div class="tools-wrp-bottom" id="2">
                <div class="tool-bottom-wrp-icon">
                    <img class="tool-bottom-icon" style="background-color: white;" title="contoh" src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExd2g3aDFmNXk3OWtsd2xqaWhwYWNnbGd0eHUzeTBmcDM5bDl6ZWk0YyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/moutEMlv0lA3bChkuC/giphy.gif" alt="contoh">
                </div>
                <div class="tool-bottom-text" title="contoh">Berita</div>
            </div>

            <div class="tools-wrp-bottom" id="3">
                <div class="tool-bottom-wrp-icon">
                    <img class="tool-bottom-icon" title="contoh" src="../icon.png" alt="contoh">
                </div>
                <div class="tool-bottom-text" title="contoh">contoh</div>
            </div>

            <div class="tools-wrp-bottom" id="4">
                <div class="tool-bottom-wrp-icon">
                    <img class="tool-bottom-icon" title="contoh" src="../icon.png" alt="contoh">
                </div>
                <div class="tool-bottom-text" title="contoh">contoh</div>
            </div>
            </a>

            <div onclick="search()" id="5">
                <a href="#search">
                    <div class="tools-wrp-bottom" id="searchbtn">
                        <div class="tool-bottom-wrp-icon">
                            <img class="tool-bottom-icon" title="contoh" src="https://lanvry.github.io/gitiolanvry/searchgif.gif" alt="contoh">
                        </div>
                        <div class="tool-bottom-text" title="contoh">Search</div>
                    </div>
                </a>
                </a>
            </div>

            <div onclick="getMenumanager(2)" id="6">
                <div class="tools-wrp-bottom">
                    <div class="tool-bottom-wrp-icon">
                        <img class="tool-bottom-icon" title="KONTAK" src="https://assets-v2.lottiefiles.com/a/6431ce8a-1165-11ee-a6d6-27776b4f78b6/VTXFk88umW.gif" alt="KONTAK">
                    </div>
                    <div class="tool-bottom-text" title="KONTAK">Kontak</div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function getMenumanager(id) {
            showBasedModal();
            $.ajax({
                type: 'GET',
                url: APP_URL + 'arjuna/kontak/' + id,
                dataType: "html",
                success: function(html) {
                    $("#navbar_based_modal_content").html(html);
                },
                error: function(err) {
                    $("#navbar_based_modal_content").html(
                        `<div style="text-align:center; font-size:1.5rem">isi</div>`
                    );
                    console.log(err)
                }
            })
        }
    </script>
    <script>
        function getProfil(id) {
            showBasedModal();
            $.ajax({
                type: 'GET',
                url: APP_URL + 'arjuna/profil/' + id,
                dataType: "html",
                success: function(html) {
                    $("#navbar_based_modal_content").html(html);
                },
                error: function(err) {
                    $("#navbar_based_modal_content").html(
                        `<div style="text-align:center; font-size:1.5rem">isi</div>`
                    );
                    console.log(err)
                }
            })
        }
    </script>
</div>

<script>
    var APP_URL = "https://lanvry.github.io/gitiolanvry/"
</script>