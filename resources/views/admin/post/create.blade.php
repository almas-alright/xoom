@extends('admin.layout')

@section('style')
	<link rel="stylesheet" href="{{ asset('assets/lib/inputlimiter/jquery.inputlimiter.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.min.css">

        <link id="ff" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/css/bootstrap-colorpicker.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

@endsection

@section('content')

<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="col-lg-12">            	
                <h1>
                @hasSection('title')
                	@yield('title')
                @else
                Add New
                @endif
                </h1>
                <hr>

                <div class="row">

                <div class="col-lg-12">
				    <div class="box dark">
				        <header>
				            <div class="icons"><i class="fa fa-edit"></i></div>
				            
				            <h5>Post Data</h5>

				            <!-- .toolbar -->
				            <div class="toolbar">
				              <nav style="padding: 8px;">
				                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
				                      <i class="fa fa-minus"></i>
				                  </a>
				                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
				                      <i class="fa fa-expand"></i>
				                  </a>
				                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
				                      <i class="fa fa-times"></i>
				                  </a>
				              </nav>
				            </div>            <!-- /.toolbar -->
				        </header>
				        <div id="div-1" class="body collapse in" aria-expanded="true" style="">
				            <form method="post" action="{{ route('post.store') }}@yield('edtID')" class="form-horizontal">
				            	{{ csrf_field() }}
				            	@section('editMethod')
				            		@show
				                <div class="form-group">
				                    <label for="text1" class="control-label col-lg-4">Post Title</label>

				                    <div class="col-lg-8">
				                        <input id="text1" name="title" placeholder="title" class="form-control" value="@yield('edtTitle')" type="text">
				                    </div>
				                </div>
				                <!-- /.form-group -->                

				                <div class="form-group">
				                    <label for="autosize" class="control-label col-lg-4">Posts Content</label>

				                    <div class="col-lg-8">
				                        <textarea name="content" id="ckeditor" class="ckeditor">@yield('edtContent')</textarea>
				                    </div>
				                </div>

				                <hr>
				                <div class="form-actions no-margin-bottom" id="cleditorForm">
			                        <input type="submit" value="Publlish" class="btn btn-primary">
			                    </div>
				                <!-- /.form-group -->
				            </form>
				            @if($errors->any())
				            <hr>
				            <div class="alert alert-danger">
				                <div class="w3-card">
				                    <div class="w3-panel w3-red">
				                        <ul class="w3-ul w3-red">
				                            @foreach($errors->all() as $error)
				                            <li>{{ $error }}</li>
				                            @endforeach 
				                        </ul>
				                    </div>
				                </div>
				            </div>
				            @endif
				        </div>
				    </div>
				</div>

				    
				</div>

            </div>

        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>

@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.17/jquery.autosize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/js/bootstrap-colorpicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
<script src="{{ asset('assets/lib/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('assets/lib/pagedown-bootstrap/js/jquery.pagedown-bootstrap.combined.min.js') }}"></script>
<script>
	$(function() {
	  // Metis.formWysiwyg();

	  $('#ds, #de').datepicker({
            format: 'mm-dd-yyyy'
        });
	});
</script>

@endsection
