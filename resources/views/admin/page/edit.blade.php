@extends('admin.layouts.app')
@section('style')

@endsection
@section('content')
<div class="content-wrapper">

	   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Page</h1>
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
                    <label>Name <span style="color:red"></span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->name }}" name="name" >
                  </div>


                  <div class="form-group">
                    <label>Title <span style="color:red"></span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->title }}" name="title" >
                  </div>

                  <div class="form-group">
                    <label>Image <span style="color:red"></span></label>
                    <input type="file" class="form-control"  name="image" >
                    @if(!empty($getRecord->getImage()))
                      <img style="width: 200px;" src="{{ $getRecord->getImage() }}">
                    @endif
                  </div>


                  <div class="form-group">
                    <label>Description <span style="color:red"></span></label>
                    <textarea class="form-control editor" name="description">{{ $getRecord->description }}</textarea>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label>Meta title <span style="color:red">*</span></label>
                    <input type="text" class="form-control" required value="{{ old('meta_title', $getRecord->meta_title) }}" name="meta_title" placeholder="Meta title">
                  </div>


                  <div class="form-group">
                    <label>Meta Description</label>
                    <textarea class="form-control" placeholder="Meta Description" name="meta_description">{{ old('meta_description', $getRecord->meta_description) }}</textarea>
                  </div>


                  <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text"  class="form-control" value="{{ old('meta_keywords', $getRecord->meta_keywords) }}" name="meta_keywords" placeholder="Meta Keywords">
                  </div>


               </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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