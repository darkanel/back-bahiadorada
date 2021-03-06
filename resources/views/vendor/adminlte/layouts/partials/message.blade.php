@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@include('flash::message')
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
