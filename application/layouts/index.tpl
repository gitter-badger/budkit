<?xml version="1.0" encoding="utf-8"?>
<tpl:layout xmlns:tpl="http://budkit.org/tpl" name="index">
    <html lang="en">
        <head>
            <tpl:import name="head" />
        </head>
        <body>
            <div class="container-side sidebar" role="side">
                <tpl:import name="sidebar" />
            </div>
            <div class="container-aside sidebar" role="aside">
                <tpl:import name="asidebar" />
            </div>
            <div class="container-main">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-navigation">
                        <tpl:import name="search" />
                    </div>
                </nav>
                <div class="container-fluid">
                    <tpl:block name="content" /> <!--use block.content var to append data to this element-->
                </div>
            </div>
            <script src="assets/js/jquery-1.8.3.min.js"></script>
            <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap-select.js"></script>
            <script src="assets/js/bootstrap-switch.js"></script>
            <script src="assets/js/flatui-checkbox.js"></script>
            <script src="assets/js/flatui-radio.js"></script>
            <script src="assets/js/jquery.tagsinput.js"></script>
            <script src="assets/js/jquery.placeholder.js"></script>
        </body>
    </html>
</tpl:layout>