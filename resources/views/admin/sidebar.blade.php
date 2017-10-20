<aside class="bg-black aside-md hidden-print" id="nav">          
  <section class="vbox">
    <section class="w-f scrollable">
      <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
        <div class="clearfix wrapper dk nav-user hidden-xs">
          <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="thumb avatar pull-left m-r">                        
                <img src="{{asset('images/a0.png')}}" class="dker" alt="...">
                <i class="on md b-black"></i>
              </span>
              <span class="hidden-nav-xs clear">
                <span class="block m-t-xs">
                  <strong class="font-bold text-lt">Ali.Math</strong> 
                  <b class="caret"></b>
                </span>
                <span class="text-muted text-xs block">Owners Owner</span>
              </span>
            </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">                      
              <li>
                <span class="arrow top hidden-nav-xs"></span>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
              </li>
            </ul>
          </div>
        </div>  
        <nav class="nav-primary hidden-xs">
          <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
            <ul class="nav nav-main" data-ride="collapse">
              <li  class="active">
                <a href="{{ url('admin') }}" class="auto">
                  <i class="fa fa-tachometer">
                  </i>
                  <span class="font-bold">Dashboard</span>
                </a>
              </li>
              <li >
                <a href="#" class="auto">
                  <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                  </span>
                  <b class="badge bg-danger pull-right">4</b>
                  <i class="i i-stack icon">
                  </i>
                  <span class="font-bold">Layouts</span>
                </a>
                <ul class="nav dk">
                  <li >
                    <a href="#" class="auto">                                                        
                      <i class="i i-dot"></i>

                      <span>Color option</span>
                    </a>
                  </li>
                  <li >
                    <a href="#" class="auto">                                                        
                      <i class="i i-dot"></i>

                      <span>Hbox layout</span>
                    </a>
                  </li>
                  <li >
                    <a href="#" class="auto">                                                        
                      <i class="i i-dot"></i>

                      <span>Boxed layout</span>
                    </a>
                  </li>
                  <li >
                    <a href="#" class="auto">                                                        
                      <i class="i i-dot"></i>
                      <span>Fluid layout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        </nav>                      
      </div>
    </section>
    
    <footer class="footer hidden-xs no-padder text-center-nav-xs">
      <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
        <i class="i i-logout"></i>
      </a>
      <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
        <i class="i i-circleleft text"></i>
        <i class="i i-circleright text-active"></i>
      </a>
    </footer>
  </section>
</aside>
