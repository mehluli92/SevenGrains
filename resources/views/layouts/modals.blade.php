<!-- Start registration modal-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="{{ route('register') }}" method="post">
          @csrf
              <div class="form-group row">
                  <div class="col-md-12">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-12">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required autocomplete="email">
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-12">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-12">
                      <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>
              
              <input type="hidden" id="role" name="role" value="other">
            
        <!--Registration Form ends -->
                  </div>
         
                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Sign Up</button>
                  </div>
                </form>
              </div>
      </div>
      
    </div>
  </div>
</div>


<!-- Start login modal-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <!--Registration Form start -->
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-group row">
              <div class="col-md-12">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-12">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
              </div>
          </div>
          
                  </div>

                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">{{ __('Login') }}</button>
                  </div>
                  
  </form>
        <!--Registration Form ends -->

      </div>
    </div>
  </div>
</div>