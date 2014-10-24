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
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-navigation">
                        <tpl:import name="search" />
                    </div>
                </nav>
                <div class="container-fluid">
                    <tpl:block name="content" /> <!--use block.content var to append data to this element-->
                </div>
            </div>
            <tpl:import name="scripts" />
        </body>
    </html>
</tpl:layout>