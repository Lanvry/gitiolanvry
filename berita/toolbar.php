<link rel="stylesheet" href="../css/fe/style1.css">
<script src="../js/fe/script1.js"></script>
<div id="toolbar-p-1" class="">
<div id="toolbar-p-1" class="" style="transition: 1s all;">
                    <div id="toolbar-p-1-container" class="tools-wrp-bottom-container">
                        <div onclick="getProfil(1)">
                            <div class="tools-wrp-bottom" id="1">
                                <div class="tool-bottom-wrp-icon">
                                    <img class="tool-bottom-icon" style="background-color: white;" title="Profil" src="https://t3.ftcdn.net/jpg/05/53/79/60/360_F_553796090_XHrE6R9jwmBJUMo9HKl41hyHJ5gqt9oz.jpg" alt="Profil">
                                </div>
                                <div class="tool-bottom-text" title="PROFIL">Profil</div>
                            </div>
                        </div>

                        <div class="tools-wrp-bottom" id="2">
                            <div class="tool-bottom-wrp-icon">
                                <img class="tool-bottom-icon" style="background-color: white;" title="Berita" src="https://cdn.icon-icons.com/icons2/3249/PNG/512/news_filled_icon_200465.png" alt="contoh">
                            </div>
                            <div class="tool-bottom-text" title="contoh">Berita</div>
                        </div>

                        <div class="tools-wrp-bottom" id="3">
                            <div class="tool-bottom-wrp-icon">
                                <img class="tool-bottom-icon" style="background-color: white;" title="Download" src="https://cdn.icon-icons.com/icons2/1674/PNG/512/download_111133.png" alt="contoh">
                            </div>
                            <div class="tool-bottom-text" title="contoh">Download</div>
                        </div>

                        <div class="tools-wrp-bottom" id="4">
                            <div class="tool-bottom-wrp-icon">
                                <img class="tool-bottom-icon" style="background-color: white;" title="Galeri" src="https://cdn.icon-icons.com/icons2/3871/PNG/512/gallery_import_icon_244246.png" alt="contoh">
                            </div>
                            <div class="tool-bottom-text" title="contoh">Galeri</div>
                        </div>
                        </a>

                        <div onclick="search()" id="5">
                            <a href="#search">
                                <div class="tools-wrp-bottom" id="searchbtn">
                                    <div class="tool-bottom-wrp-icon">
                                        <img class="tool-bottom-icon" title="Search" style="background-color: white;" src="https://cdn.icon-icons.com/icons2/3249/PNG/512/search_filled_icon_200327.png" alt="contoh">
                                    </div>
                                    <div class="tool-bottom-text" title="contoh">Search</div>
                                </div>
                            </a>
                            </a>
                        </div>

                        <div onclick="kontak()" id="6">
                            <div class="tools-wrp-bottom">
                                <div class="tool-bottom-wrp-icon">
                                    <img class="tool-bottom-icon" title="Kontak" src="https://i.ibb.co/VHh4X5y/phone-icon-flat-style-isolated-on-grey-background-telephone-symbol-call-illustration-sign-for-web-an.jpg" alt="KONTAK">
                                </div>
                                <div class="tool-bottom-text" title="KONTAK">Kontak</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="formsearch">
                    <a onclick="searchoff()" id="btnoff" style="font-size: 30px; font-weight: bold;"><ion-icon name="close-outline"></ion-icon></a>
                    <div style="opacity: 0%;" id="bwi-brand" class=" title-text-single coloring-text-logo typewriter">
                        <img class="iming" src="https://sumenepkab.go.id/assets/theme2/img/logo.png" style="width:350px">
                    </div>
                    <!-- search bar -->
                    <form action="" method="post" class="searchform">
                        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

                        <div class="wrapper">
                            <div class="label">Submit your search</div>
                            <div class="searchBar">
                                <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
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