<div id="left">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img" alt="User Picture" src="admin/assets/img/user.gif">
                            <!-- <span class="label label-danger user-label">16</span> -->
                        </a>

                        <div class="media-body">
                            <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                            <ul class="list-unstyled user-info">
                                <li><a href="#">Administrator</a></li>
                                <!-- <li>Last Access : <br>
                                    <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu" class="bg-blue dker">
                    <li class="nav-header">Menu</li>
                    <li class="nav-divider"></li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-list-alt"></i><span class="link-title">&nbsp;Pages</span><span class="fa arrow"></span>
                            </a>
                            <ul class="collapse">
                              <li>
                                <a href="{{ route('post.index') }}">
                                  <i class="fa fa-angle-right"></i>&nbsp; All Pages </a>
                              </li>
                              <li>
                                <a href="{{ route('post.create') }}">
                                  <i class="fa fa-angle-right"></i>&nbsp; Add New Page 
                                  </a>
                              </li>                              
                            </ul>                        
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-list-alt"></i><span class="link-title">&nbsp;products</span><span class="fa arrow"></span>
                            </a>
                            <ul class="collapse">
                              <li>
                                <a href="{{ route('product.index') }}">
                                  <i class="fa fa-angle-right"></i>&nbsp; All products </a>
                              </li>
                              <li>
                                <a href="{{ route('product.create') }}">
                                  <i class="fa fa-angle-right"></i>&nbsp; Add New product 
                                  </a>
                              </li>                              
                            </ul>                        
                    </li>

                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-list-alt"></i><span class="link-title">&nbsp;Options</span><span class="fa arrow"></span>
                            </a>
                            <ul class="collapse">                              
                                <a href="{{ route('option.social') }}">
                                    <i class="fa fa-angle-right"></i><span class="link-title">&nbsp;Social Links</span>
                                </a>
                            </li>                             
                            </ul>                        
                    </li>
                                        <li class="">
                        <a href="{{ route('abcd.home') }}">
                            <i class="fa fa-user"></i><span class="link-title">&nbsp;users</span>
                        </a>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>