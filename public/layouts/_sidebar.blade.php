@php
$Geticon = App\Models\Logo_websiteModel::getSingleFirst();  
@endphp

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> 
                <a href="" class="brand-link"> 
                    
                    <img src="{{url('upload/logo/'.$Geticon->logo)}}" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text-->
                     <span class="brand-text fw-light">{{$Geticon->website_name}}</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <!-- Admin Menu -->
                    @if(Auth::user()->is_role == 1)

                    <li class="nav-item"> <a href="{{ url('admin/dashboard')}}" class="nav-link  @if(Request::segment(2) == 'dashboard') active @endif "> <i class="nav-icon fa fa-dashboard"></i>
                                        <p>Dashboard</p>
                                </a> </li>
                            
                        </li>
                       
                
                        <li class="nav-item "> <a href="{{ url('admin/category')}}" class="nav-link @if(Request::segment(2) == 'category') active @endif"> <i class="nav-icon fa fa-cube"></i>
                                <p>
                                   Category
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                     <!-- <li class="  Product"> </li> -->
                        <li class="nav-item "> <a href="{{ url('admin/product')}}" class="nav-link @if(Request::segment(2) == 'product') active @endif"> <i class="nav-icon fa fa-cubes"></i>
                                <p>
                                   Product
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                     <!-- <li class="  Product"> </li> -->
                        <li class="nav-item "> <a  href="{{ url('admin/member')}}" class="nav-link @if(Request::segment(2) == 'member') active @endif"> <i class="nav-icon fa fa-id-card"></i>
                                <p>
                                 Member
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                     <!-- <li class="   Supplier"> </li> -->
                        <li class="nav-item"> <a href="{{ url('admin/supplier')}}" class="nav-link  @if(Request::segment(2) == 'supplier') active @endif"> <i class="nav-icon fa fa-truck"></i>
                                <p>
                                   Supplier
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                       <!-- user menu -->
                       <li class="nav-header"> Transaction </li>
                      
                      
                       <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"><a href="{{ url('admin/expense')}}" class="nav-link  @if(Request::segment(2) == 'expense') active @endif"> <i class="nav-icon fa-solid fa-money-bill"></i>
                                <p>
                                  Expense
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                       <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"><a href="{{ url('admin/purchase')}}" class="nav-link  @if(Request::segment(2) == 'purchase') active @endif"><i class="nav-icon fa fa-download"></i>
                                <p>
                                  Purchase
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                       <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"> <a href="{{ url('admin/sales')}}" class="nav-link  @if(Request::segment(2) == 'sales') active @endif"> <i class="nav-icon fa fa-dollar"></i>
                                <p>
                                  Sales List
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                       <!-- <li class=" Transaction"> </li> -->
                
                        <li class="nav-item"><a href="{{ url('admin/transaction')}}" class="nav-link  @if(Request::segment(2) == 'transaction') active @endif"> <i class="nav-icon fa-solid fa-money-bill"></i>
                            <p>
                                Transaction
                                <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                            </p>
                        </a>
                        
                    </li>
                      
                       <!-- <li class=" Active Transaction"> </li> -->
                       <li class="nav-item"> <a href="{{ url('admin/logo')}}" class="nav-link  @if(Request::segment(2) == 'logo') active @endif"> <i class="nav-icon fa fa-bullhorn"></i>
                                <p>
                                Logo
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                        <li class="nav-header"> Reports </li>
                        <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"> <a href="{{ url('admin/smtp')}}" class="nav-link @if(Request::segment(2) == 'smtp') active @endif"> <i class="nav-icon fa fa-envelope"></i>
                                <p>
                                SMTP
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                        <!-- <li class="   Supplier"> </li> -->
                        <li class="nav-header"> System </li>
                       <li class="nav-item"> <a  href="{{ url('admin/users')}}" class="nav-link @if(Request::segment(2) == 'users') active @endif"> <i class="nav-icon fa fa-users"></i>
                                <p>
                               User
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                            <p>
                               Settings
                               
                            </p>
                        </a>
                       
                    </li>
                    <li class="nav-item"> <a href="{{url('admin/my_account')}}" class="nav-link  @if(Request::segment(2) == 'my_account') active @endif"> <i class="nav-icon fa fa-user"></i>
                        <p>
                           My Account
                           
                        </p>
                    </a>
                    
                </li>
               <!-- <li class="   Supplier"> </li> -->
               <li class="nav-item"> <a href="{{url('admin/change_password')}}" class="nav-link  @if(Request::segment(2) == 'change_password') active @endif"> <i class="nav-icon fa fa-key"></i>
                        <p>
                          Change Password
                           
                           
                        </p>
                    </a>
                    
                </li>

                       @elseif(Auth::user()->is_role == 2)
                       <li class="nav-item"> <a href="{{ url('user/dashboard')}}" class="nav-link active"> <i class="nav-icon fa fa-dashboard"></i>
                                        <p>User Dashboard</p>
                                </a> </li>
                            
                        </li>
                        <!-- <li class="   Transaction"> </li> -->
                        <li class="nav-header"> Transaction </li>
                        <li class="nav-item"> <a href="{{url('user/new_transaction')}}" class="nav-link @if(Request::segment(2) == 'new_transaction') active @endif"> <i class="nav-icon fa fa-cart-plus"></i>
                                <p>
                                  New Transaction
                                    <!-- <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi bi-chevron-right"></i> -->
                                </p>
                            </a>
                            
                        </li>

                         <!-- <li class=" Transaction"> </li> -->
                
                         <li class="nav-item"><a href="{{ url('user/transaction_list')}}" class="nav-link  @if(Request::segment(2) == 'transaction_list') active @endif"> <i class="nav-icon fa-solid fa-money-bill"></i>
                            <p>
                                Transaction List
                               
                            </p>
                        </a>
                        
                    </li>
                       <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"> <a href="{{url('user/my_account')}}" class="nav-link  @if(Request::segment(2) == 'my_account') active @endif"> <i class="nav-icon fa fa-user"></i>
                                <p>
                                   My Account
                                   
                                </p>
                            </a>
                            
                        </li>
                       <!-- <li class="   Supplier"> </li> -->
                       <li class="nav-item"> <a href="{{url('user/change_password')}}" class="nav-link  @if(Request::segment(2) == 'change_password') active @endif"> <i class="nav-icon fa fa-key"></i>
                                <p>
                                  Change Password
                                   
                                   
                                </p>
                            </a>
                            
                        </li>
                        @elseif(Auth::user()->is_role == 3)

                        <li class="nav-item"> <a href="{{ url('client/dashboard')}}" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                        <p> Clients Dashboard</p>
                                </a> </li>
                            
                        </li>
                      
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                                <p>
                                   Settings
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                           
                        </li>

                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    Layout Options
                                    <span class="nav-badge badge text-bg-secondary me-3">6</span> <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Default Sidebar</p>
                                    </a> </li>
                               
                            </ul>
                        </li>
                        
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                                <p>
                                    Forms
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                           
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                                <p>
                                    Tables
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                           
                        </li>
                       
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Auth
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>
                       
                       
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-ui-checks-grid"></i>
                                <p>
                                    Components
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-filetype-js"></i>
                                <p>
                                    Javascript
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./docs/javascript/treeview.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Treeview</p>
                                    </a> </li>
                            </ul>
                        </li>
                       
                       
                       
                    </ul> <!--end::Sidebar Menu-->


                       @endif
                       
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->