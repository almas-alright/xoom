<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
<footer class="Footer bg-dark dker">
            <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
        </footer>
        <!-- /#footer -->
        <!-- #helpModal -->
        <div id="helpModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /#helpModal -->
        <!--jQuery -->
        <script src="{{ asset('admin/assets/lib/jquery/jquery.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <!--Bootstrap -->
        <script src="{{ asset('admin/assets/lib/bootstrap/js/bootstrap.js') }}"></script>
        <!-- MetisMenu -->
        <script src="{{ asset('admin/assets/js/core/Metis.js') }}"></script>
        <script src="{{ asset('admin/assets/js/core/metisAdminPanel.js') }}"></script>
        <script src="{{ asset('admin/assets/js/core/metisNavBar.js') }}"></script>
        <script src="{{ asset('admin/assets/js/core/init.js') }}"></script>
        <script src="{{ asset('admin/assets/lib/metismenu/metisMenu.js') }}"></script>
        <!-- onoffcanvas -->
        <script src="{{ asset('admin/assets/lib/onoffcanvas/onoffcanvas.js') }}"></script>
        <!-- Screenfull -->
        <script src="{{ asset('admin/assets/lib/screenfull/screenfull.js"') }}></script>
        <!-- Metis core scripts -->
        <script src="{{ asset('admin/assets/js/core.js') }}"></script>
        <!-- Metis demo scripts -->
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>


        <!--  <script src="admin/assets/js/style-switcher.js"></script> -->

        @yield('scripts')
    </body>

</html>