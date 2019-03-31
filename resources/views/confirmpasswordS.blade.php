

      @extends('partials.master')

      @section('content')
      <hr>
</div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 mb-5">

                <form class="form-container" action="/password/reset" method="post">
                  @if(session('f'))
                    <div class="alert alert-danger">
        							<p>Wrong Email or Password</p>
        						</div>
                  @endif
                    @csrf
                    <h2 class="text-success text-uppercase text-center"><img class="pb-2 pr-2" src="{{asset('icon/icon.png')}}" style="height: 40px;">student Login</h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="text-success">Email</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="email" required>
                    </div>
                    <input type="hidden" name="token" value="{{$token}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="text-success">New Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="New Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="text-success">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required>
                  </div><br>
                  <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>

    </div>

    @endsection
