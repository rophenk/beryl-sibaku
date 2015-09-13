@extends('sibankum.admin.master')
@section('title', 'File Upload' )

@section('pagestyle')

@endsection

@section('breadcrumb')

						<li>
							<a href="/dashboard">File Upload</a>
						</li>
@endsection
@section('content')
<div class="row">
	<div class="portlet light">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-pin font-green"></i>
				<span class="caption-subject bold uppercase"> File Upload</span>
			</div>
		</div>
			<div class="portlet-body form">
			   <div class="form-body">
			     <div class="span7 offset1">
			        @if(Session::has('success'))
			          <div class="alert-box success">
			          <strong>{!! Session::get('success') !!}</strong>
			          </div>
			        @endif
			        <label for="alias">Upload Form</label>
			        {!! Form::open(array('url'=>'file/upload','method'=>'POST', 'files'=>true)) !!}
			         <div class="control-group">
			          <div class="controls">
			          {!! Form::file('file') !!}
				  <p class="errors">{!!$errors->first('file')!!}</p>
				@if(Session::has('error'))
				<p class="errors">{!! Session::get('error') !!}</p>
				@endif
			        </div>
			        </div>
			        <div id="success"> </div>
			      {!! Form::hidden('case_uuid', $case_uuid) !!}
			      {!! Form::submit('Submit', array('class'=>'btn blue')) !!}
			      {!! Form::close() !!}
			      </div>
			   </div>
			</div>
	</div>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
function copyToClipboard(elementId) {

  // create a "hidden" input
  var aux = document.createElement("input");

  // assign it the value of the specified element
  aux.setAttribute("value", document.getElementById(elementId).innerHTML);

  // append it to the body
  document.body.appendChild(aux);

  // highlight its content
  aux.select();

  // copy the highlighted text
  document.execCommand("copy");

  // remove it from the body
  document.body.removeChild(aux);

}
</script>
@endsection