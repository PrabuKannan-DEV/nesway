<div class="row">
    <div class="col-lg-12">

      @if(!empty(Session::get('success')))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      @endif

      @if(!empty(Session::get('error')))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      @endif

      @if(!empty(Session::get('warning')))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
            {{ Session::get('warning') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      @endif
    </div>
</div>
