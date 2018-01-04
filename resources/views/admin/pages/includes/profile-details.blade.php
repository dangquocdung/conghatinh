<div class="col-md-6 col-sm-12">
  <form action="{{route('update-profile')}}" method="post" id="profiled-edit-form">
    {{--Box--}}
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">My profile details</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        {{csrf_field()}}

        <fieldset>
          <div class="form-group">
            <label for="display_name">Name:</label>
            <input type="text"
                   class="form-control"
                   name="name"
                   value="{{Auth::user()->name}}"
                   placeholder="Enter your name"/>
            <div class="Message error">{{$errors->first('name')}}</div>
          </div>

          <div class="form-group">
            <label for="display_name">Email:</label>
            <input type="text"
                   class="form-control"
                   value="{{Auth::user()->email}}"
                   placeholder="Enter your email address" disabled/>
          </div>

          <div class="form-group">
            <label for="display_name">Designation:</label>
            <input type="text"
                   class="form-control"
                   name="designation"
                   value="{{Auth::user()->profile->designation}}"
                   placeholder="Enter your Linekd In username"/>
            <div class="Message error">{{$errors->first('designation')}}</div>
          </div>
        </fieldset>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">
          <i class="fa fa-save"></i> Update
        </button>
      </div>
    </div>
  </form>
  {{--End box--}}
</div>