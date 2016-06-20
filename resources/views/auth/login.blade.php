<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Joli Admin - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ url('joli/css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
  <div class="message-box animated fadeIn open" data-sound="alert" id="mb-signout">
    <form class="form-horizontal">  
      <div class="mb-container" style="top: 25%">
          <div class="mb-middle">
              <div class="mb-title"><span class="fa fa-sign-in"></span> User <strong>Authentication</strong></div>
              <div class="mb-content">
                  <div class="form-group">
                    <span class="col-md-12 help-block" :class="auth.authenticated ? 'text-success' : 'text-danger'" style="text-align: center;">@{{ auth.response_text }}</span>
                  </div>
                  <div class="form-group">                      
                      <label class="col-md-3 control-label">User Account</label>
                      <div class="col-md-6">                                            
                          <div>
                              <input type="text" class="form-control" v-model="auth.user.user_name"/>
                          </div>                                            
                      </div>
                  </div>               
                  <div class="form-group">
                      <label class="col-md-3 control-label">Password</label>
                      <div class="col-md-6">                                            
                          <div>
                              <input type="password" class="form-control" v-model="auth.user.password"/>
                          </div>                                            
                      </div>
                  </div>
              </div>
              <div class="mb-footer">
                  <div style="margin-left: 400px;">
                      <a @click.stop.prevent="login" class="btn btn-success btn-lg">Log in</a>
                  </div>
              </div>
          </div>
      </div>
    </form>
  </div>
  <!-- START SCRIPTS -->
  @include('_scripts.joli_script')
  <script type="text/javascript" src="/js/app.js"></script>
  <!-- END SCRIPTS -->
</body>
</html>