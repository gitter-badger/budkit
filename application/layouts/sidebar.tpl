<?xml version="1.0" encoding="UTF-8"?>
<tpl:layout xmlns:tpl="http://budkit.org/tpl" name="index">
    <!--
     <div class="profile">
         <img src="assets/img/icons/svg/loop.svg" class="dp img-circle" width="90"/>
         <a class="link" href="#">Livingstone Fultang</a>
     </div>
     <hr/>
     -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                    <span class="sr-only">Toggle</span>
                </button>
                <a class="navbar-brand" href="#">laboristory</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <tpl:link rel="person" href="#"  src="assets/img/avatars/hamilton.jpeg" class="featured-img person" width="20" height="20"/>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="nav nav-stacked menu">
        <li class="active">
            <a href="/inbox">
                <i class="menu-icon glyphicon glyphicon-inbox" />
                <span class="menu-text">Inbox</span>
                <span class="menu-count badge badge-danger">10+</span>
            </a>
        </li>
        <li>
            <a href="/projects">
                <i class="menu-icon fa fa-tasks" />
                <span class="menu-text">Projects</span>
            </a>
        </li>
        <li>
            <a href="/calendar">
                <i class="menu-icon glyphicon glyphicon-calendar" />
                <span class="menu-text">Calendar</span>
            </a>
        </li>
    </ul>
    <ul class="nav nav-stacked menu">
        <li>
            <a href="protocols.html">
                <i class="menu-icon fa fa-list-ol" />
                <span class="menu-text">Protocols</span>
            </a>
        </li>
        <li>
            <a href="courses.html">
                <i class="menu-icon glyphicon glyphicon-road" />
                <span class="menu-text">Courses</span>
            </a>
        </li>
        <li>
            <a href="forum.html">
                <i class="menu-icon glyphicon glyphicon-random" />
                <span class="menu-text">The Exchange</span>
            </a>
        </li>
    </ul>
    <hr />
    <ul class="nav  nav-stacked menu">
        <li>
            <a href="#">
                <i class="menu-icon fui-tag color-alizarin" />
                <span class="menu-text">Urgent</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon fui-tag color-carrot" />
                <span class="menu-text">Task</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon fui-tag color-belize-hole" />
                <span class="menu-text">Result</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon fui-tag color-green-sea" />
                <span class="menu-text">Requests</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon glyphicon glyphicon-plus" />
                <span class="menu-text">New Label</span>
            </a>
        </li>
    </ul>
</tpl:layout>