<ul class="navbar-nav ms-auto mb-2 mb-lg-0 flex-nowrap">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" active="false" aria-selected="false">
            Modules
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow-sm">
            <div class="d-md-flex align-items-start justify-content-start">
                <div>
                    <div class="dropdown-header py-0">Student</div>
                    <a class="dropdown-item py-0" onclick="clickSubModule('panel/stud_profile/studProfile_main.php')">Student Profile</a>
                    <a class="dropdown-item py-0" onclick="clickSubModule('panel/stud_registry/studReg_main.php')">Student Registry</a>
                </div>
                <div>
                    <div class="dropdown-header py-0">Settings</div>
                    <a class="dropdown-item py-0">Sample 3</a>
                    <a class="dropdown-item py-0">Sample 4</a>
                </div>
            </div>
        </div>
    </li>
</ul>
<script>
    function clickSubModule(filepath) {
        $.post(filepath,
        function(data) {
            $('#maincontent').html(data)
        });
    }
</script>