

      @extends('partials.master')

      @section('content')
      <hr>
</div> <br><br>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 mb-5">
                <form class="form-container" action="/fpt" method="post">
                  @if(session('f'))
                    <div class="alert alert-danger">
        							<p>Wrong Email or Password</p>
        						</div>
                  @endif
                    @csrf
                    <h2 class="text-success text-uppercase text-center"><img class="pb-2 pr-2" src="{{asset('icon/icon.png')}}" style="height: 40px;">Teacher Login</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="text-success">Give Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                  </div><br>

                  <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div><br><br><br>

    </div>

    @endsection
