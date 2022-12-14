            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2022 Alrights Reserved | Developed By <a href="#" class="font-weight-bold ml-1" target="_blank">Shahdiul Islam Khan</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">Site License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            </div>
            </div>
            <!--   Core   -->
            <script src="/Portfolio/admin_dashboard/assets/js/plugins/jquery/dist/jquery.min.js"></script>
            <script src="/Portfolio/admin_dashboard/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!--   Optional JS   -->
            <script src="/Portfolio/admin_dashboard/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
            <script src="/Portfolio/admin_dashboard/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
            <!--   Argon JS   -->
            <script src="/Portfolio/admin_dashboard/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
            <script>
                window.TrackJS &&
                    TrackJS.install({
                        token: "ee6fab19c5a04ac1a32a645abde4613a",
                        application: "argon-dashboard-free"
                    });
            </script>
            <script>
                // Get the container element
                var btnContainer = document.getElementById("myDIV");
                // Get all buttons with class="btn" inside the container
                var btns = btnContainer.getElementsByClassName("btn");
                // Loop through the buttons and add the active class to the current/clicked button
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>
            </body>

            </html>