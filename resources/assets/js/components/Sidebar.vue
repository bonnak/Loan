<template>
	<div class="page-sidebar page-sidebar-fixed scroll">
	    <!-- START X-NAVIGATION -->
	    <ul class="x-navigation x-navigation-custom">
	        <li class="xn-logo">
	            <a href="index.html">Joli Admin</a>
	            <a href="#" class="x-navigation-control"></a>
	        </li>
	        <li class="xn-title">Navigation</li>
	        <li class="active">
	            <a v-link="{ path: '/' }"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
	        </li>                    
	        <li class="xn-openable">
	            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Setup</span></a>
	            <ul>                
	                <li><a href="pages-profile.html">Customer</a></li>
	                <li><a href="pages-profile.html">Loan Group</a></li>
	                <li><a href="pages-profile.html">Chart of Account</a></li>
	                <li><a href="pages-gallery.html">Exchange Rate</a></li>
	                <li><a href="pages-gallery.html">Identity Type</a></li>
	                <li><a v-link="{ path: '/user' }">User Account</a></li>
	                <li><a href="pages-profile.html">User Role</a></li>
	                <li><a href="pages-profile.html">Location</a></li>
	            </ul>
	        </li>
	        <li class="xn-openable">
	            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
	            <ul>
	                <li><a href="layout-boxed.html">Boxed</a></li>
	                <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
	                <li><a href="layout-nav-top.html">Navigation Top</a></li>
	                <li><a href="layout-nav-right.html">Navigation Right</a></li>
	                <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>                            
	                <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
	                <li><a href="layout-frame-left.html">Frame Left Column</a></li>
	                <li><a href="layout-frame-right.html">Frame Right Column</a></li>
	                <li><a href="layout-search-left.html">Search Left Side</a></li>
	                <li><a href="blank.html">Blank Page</a></li>
	            </ul>
	        </li>        
	    </ul>
	    <!-- END X-NAVIGATION -->
	</div>
</template>