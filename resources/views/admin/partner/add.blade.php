@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">

	   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Partner</h1>
          </div>          
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
      
      
       <div class="col-md-12">
            <div class="card card-primary">
              <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  

              
                   <div class="form-group">
                    <label>Image <span style="color:red">*</span></label>
                    <input type="file" class="form-control" required  name="image_name">
                  </div>

          
                 
                 <div class="form-group">
                    <label>Link <span style="color:red"></span></label>
                    <input type="text" class="form-control"  value="{{ old('button_link') }}" name="button_link" placeholder="Button Link">
                  </div>


                  <div class="form-group">
                    <label>Status <span style="color:red">*</span></label>
                    <select class="form-control" name="status" required>
                        <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                        <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                    </select>
                  </div>

                 

               </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>    
        </div>       
      </div>
    </section>
</div>

@endsection

@section('script')

@endsection