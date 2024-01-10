<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<div id="formsearch" style="background: white;"><br><br>
    <a onclick="searchoff()" id="btnoff" style="font-size: 30px; font-weight: bold;"><ion-icon name="close-outline"></ion-icon></a>
    <div style="opacity: 0%;" id="bwi-brand" class=" title-text-single coloring-text-logo typewriter">
        <img class="iming" src="https://sumenepkab.go.id/assets/theme2/img/logo.png" style="width:350px">
    </div>
    <!-- search bar -->
    <form action="" method="post" class="searchform">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <div class="wrapper" style="top:-100px; position:relative;">
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