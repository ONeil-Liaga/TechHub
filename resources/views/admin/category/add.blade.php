@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">

	   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Category</h1>
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
                    <label>Category Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control" required value="{{ old('name') }}" name="name" placeholder="Category Name">
                  </div>

                  <div class="form-group">
                    <label>Slug <span style="color:red">*</span></label>
                    <input type="text" class="form-control" required value="{{ old('slug') }}" name="slug" placeholder="Slug Ex. URL">
                    <div style="color:red">{{ $errors->first('slug') }}</div>
                  </div>

                  <div class="form-group">
                    <label>Status <span style="color:red">*</span></label>
                    <select class="form-control" name="status" required>
                        <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                        <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                    </select>
                  </div>


                  <hr>

                  <div class="form-group">
                    <label>Image <span style="color:red"></span></label>
                    <input type="file" class="form-control"  name="image_name">
                  </div>

                  <div class="form-group">
                    <label>Button Name <span style="color:red"></span></label>
                    <input type="text" class="form-control" value="{{ old('button_name') }}" name="button_name" placeholder="Button Name">
                  </div>

                  <div class="form-group">
                    <label style="display: block;">Home Screen <span style="color:red"></span></label>
                    <input type="checkbox"  name="is_home" >
                  </div>

                  <div class="form-group">
                    <label style="display: block;">Menu <span style="color:red"></span></label>
                    <input type="checkbox"  name="is_menu" >
                  </div>

                  

                  <hr>


                  <div class="form-group">
                    <label>Meta title <span style="color:red">*</span></label>
                    <input type="text" class="form-control" required value="{{ old('meta_title') }}" name="meta_title" placeholder="Meta title">
                  </div>


                  <div class="form-group">
                    <label>Meta Description</label>
                    <textarea class="form-control" placeholder="Meta Description" name="meta_description">{{ old('meta_description') }}</textarea>
                  </div>


                  <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text"  class="form-control" value="{{ old('meta_keywords') }}" name="meta_keywords" placeholder="Meta Keywords">
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