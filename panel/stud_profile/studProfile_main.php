<div class="row h-100 bg-white">
    <div class="col-2 ps-3 pt-3 border-end bg-grey">
        <div class="d-flex flex-column flex-shrink-0 bg-white">
            <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <span class="">Student Profile</span>
            </p>
            <hr>
            <ul id="nav_studpf" class="nav nav-pills flex-column mb-auto pe-0 vh-100">
                <li onclick="load_studProfile_submodule('studlist/studlist_main.php', this)" class="nav-item" id="listuddashboardmodule"><a class="studpfsubmodule nav-link link-dark active ">Student List</a></li>
                <li onclick="load_studProfile_submodule('studgrade/studgrade_main.php', this)" class="nav-item"><a class="studpfsubmodule nav-link link-dark">Student Grade</a></li>
                <li onclick="load_studProfile_submodule('studenroll/studenroll_main.php', this)" class="nav-item"><a class="studpfsubmodule nav-link link-dark">Enroll</a></li>
            </ul>
        </div>
        <div id="divstudpf_submodulecontent" class="col-xl-10 col-lg-10 px-3 auto-scroll">
            <!-- CONTENT HERE-->
        </div>
    </div>
</div>
<script>
    function load_studProfile_submodule(filename, elem){
        $('#nav_studpf li a').removeClass('active')
        $(elem).find('a').addClass('active')

        $.post("panel/stud_profile/components/" + filename, function (data) {
            $('#divstudpf_submodulecontent').html(data);
        }).fail(function() {
            // If the request fails (e.g., 404 error), log it for debugging
            console.error("Error loading " + filename);
            alert("Error loading content. File not found.");
        });
    }
</script>