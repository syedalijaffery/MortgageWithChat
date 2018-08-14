<?php
/**
 * Created by PhpStorm.
 * User: syedalijaffery
 * Date: 30/04/2018
 * Time: 4:14 PM
 */
?>
<header id="header" class="header style1 v1 bg-color">
    <div class="container">
        <div class="row">
            <div class="header-wrap">
                <div class="col-md-12">
                    <div class="flat-header-wrap">
                        <div class="flat-show-search">
                            <div class="show-search">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="top-search">
                                <form action="#" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search...">
                                        <input type="submit" value="" id="searchsubmit">
                                    </div>
                                </form>
                            </div> <!-- /.top-search -->
                        </div>  <!-- /.flat-show-search -->
                        <div class="nav-wrap">
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="active">
                                        <a href="/" title="">Home</a>
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li class="active"><a href="#" title="">Home 01</a></li>--}}
                                            {{--<li><a href="index-02.html" title="">Home 02</a></li>--}}
                                            {{--<li><a href="index-03.html" title="">Home 03</a></li>--}}
                                            {{--<li><a href="index-04.html" title="">Home 04</a></li>--}}
                                            {{--<li><a href="index-05.html" title="">Home 05</a></li>--}}
                                        {{--</ul><!-- /.sub-menu -->--}}
                                    </li>

                                    <li>
                                        <a href="about.html" title="">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html" title="">About 01</a></li>
                                            <li><a href="about-v2.html" title="">About 02</a></li>
                                            <li><a href="about-v3.html" title="">About 03</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                    <li>
                                        <a href="services.html" title="">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html" title="">Services 01</a></li>
                                            <li><a href="services-v2.html" title="">Services 02</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>

                                    <li>
                                        <a href="contact-v1.html" title="">Contact US</a>
                                        {{--<ul class="sub-menu">--}}
                                        {{--<li><a href="contact-v1.html" title="">Contact 01</a></li>--}}
                                        {{--</ul><!-- /.sub-menu -->--}}
                                    </li>


                                    @guest
                                        <li>
                                            <a href="{{ route('login') }}" title="">Login</a>
                                            {{--<ul class="sub-menu">--}}
                                            {{--<li><a href="{{ route('register') }}" title="">Signup</a></li>--}}
                                            {{--<li><a href="blog-v2.html" title="">Blog 02</a></li>--}}
                                            {{--<li><a href="blog-v3.html" title="">Blog 03</a></li>--}}
                                            {{--<li><a href="blog-single.html" title="">Blog Grid</a></li>--}}
                                            {{--</ul><!-- /.sub-menu -->--}}
                                        </li>

                                        <li>
                                            <a href="{{ route('register') }}" title="">Signup</a>

                                            {{--<li><a href="case-03.html" title="">Cases 3 columns (2)</a></li>--}}
                                            {{--<li><a href="case.html" title="">Cases 4 columns</a></li>--}}
                                            {{--<li><a href="case-single.html" title="">Cases single</a></li>--}}
                                            {{--</ul><!-- /.sub-menu -->--}}
                                        </li>
                                    @else

                                        <li>
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <ul class="sub-menu">

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </ul><!-- /.sub-menu -->
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        </li>
                                    @endguest

                                </ul><!-- /.menu -->
                            </nav><!-- /#mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div>
                </div><!-- /.col-md-9 -->
            </div><!-- /.header-wrap -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</header><!-- /header -->
