<div class="form-group {{ $errors->has('photo')? 'has-error':'' }}">
<label for="dat_of_birth" class="col-md-4 control-label">{{ trans('gparish.photo') }}</label>
<div class="col-md-6">
	<input id="email" type="file" class="form-control" name="photo" value="{{ old('photo') }}">
	@if ($errors->has('photo'))
		<span class="help-block">	
			<strong> {{ $errors->first('photo') }}</strong>
		</span>
	@endif
</div>
</div>
	<div class="form-group {{ $errors->has('dat_of_birth')? 'has-error':'' }}">
	<label for="dat_of_birth" class="col-md-4 control-label">{{ trans('gparish.dat_of_birth') }}</label>
	<div class="col-md-6">
		<input  id="dat_of_birth" type="dat_of_birth" class="form-control" name="dat_of_birth" value="{{ old('dat_of_birth') }}">
		@if ($errors->has('dat_of_birth'))
			<span class="help-block">	
				<strong> {{ $errors->first('dat_of_birth') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('nationality')? 'has-error':'' }}">
	<label for="nationality" class="col-md-4 control-label">{{ trans('gparish.nationality') }}</label>
	<div class="col-md-6">
		<input  id="nationality" type="nationality" class="form-control" name="nationality" value="{{ old('nationality') }}">
		@if ($errors->has('nationality'))
			<span class="help-block">	
				<strong> {{ $errors->first('nationality') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('sex')? 'has-error':'' }}">
	<label for="sex" class="col-md-4 control-label">{{ trans('gparish.sex') }}</label>
	<div class="col-md-6">
		<input  id="sex" type="sex" class="form-control" name="sex" value="{{ old('sex') }}">
		@if ($errors->has('sex'))
			<span class="help-block">	
				<strong> {{ $errors->first('sex') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('children')? 'has-error':'' }}">
	<label for="children" class="col-md-4 control-label">{{ trans('gparish.children') }}</label>
	<div class="col-md-6">
		<input  id="children" type="children" class="form-control" name="children" value="{{ old('children') }}">
		@if ($errors->has('children'))
			<span class="help-block">	
				<strong> {{ $errors->first('children') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('civil_status')? 'has-error':'' }}">
	<label for="civil_status" class="col-md-4 control-label">{{ trans('gparish.civil_status') }}</label>
	<div class="col-md-6">
		<input  id="civil_status" type="civil_status" class="form-control" name="civil_status" value="{{ old('civil_status') }}">
		@if ($errors->has('civil_status'))
			<span class="help-block">	
				<strong> {{ $errors->first('civil_status') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
	<label for="phone" class="col-md-4 control-label">{{ trans('gparish.phone') }}</label>
	<div class="col-md-6">
		<input  id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}">
		@if ($errors->has('phone'))
			<span class="help-block">	
				<strong> {{ $errors->first('phone') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('province')? 'has-error':'' }}">
	<label for="province" class="col-md-4 control-label">{{ trans('gparish.province') }}</label>
	<div class="col-md-6">
		<input  id="province" type="province" class="form-control" name="province" value="{{ old('province') }}">
		@if ($errors->has('province'))
			<span class="help-block">	
				<strong> {{ $errors->first('province') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('district')? 'has-error':'' }}">
	<label for="district" class="col-md-4 control-label">{{ trans('gparish.district') }}</label>
	<div class="col-md-6">
		<input  id="district" type="district" class="form-control" name="district" value="{{ old('district') }}">
		@if ($errors->has('district'))
			<span class="help-block">	
				<strong> {{ $errors->first('district') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('sector')? 'has-error':'' }}">
	<label for="sector" class="col-md-4 control-label">{{ trans('gparish.sector') }}</label>
	<div class="col-md-6">
		<input  id="sector" type="sector" class="form-control" name="sector" value="{{ old('sector') }}">
		@if ($errors->has('sector'))
			<span class="help-block">	
				<strong> {{ $errors->first('sector') }}</strong>
			</span>
		@endif
	</div>
	</div>
	  <div class="form-group {{ $errors->has('POBOX')? 'has-error':'' }}">
	<label for="POBOX" class="col-md-4 control-label">{{ trans('gparish.POBOX') }}</label>
	<div class="col-md-6">
		<input  id="POBOX" type="POBOX" class="form-control" name="POBOX" value="{{ old('POBOX') }}">
		@if ($errors->has('POBOX'))
			<span class="help-block">	
				<strong> {{ $errors->first('POBOX') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('prayer_family')? 'has-error':'' }}">
	<label for="prayer_family" class="col-md-4 control-label">{{ trans('gparish.prayer_family') }}</label>
	<div class="col-md-6">
		<input  id="prayer_family" type="prayer_family" class="form-control" name="prayer_family" value="{{ old('prayer_family') }}">
		@if ($errors->has('prayer_family'))
			<span class="help-block">	
				<strong> {{ $errors->first('prayer_family') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('section')? 'has-error':'' }}">
	<label for="section" class="col-md-4 control-label">{{ trans('gparish.section') }}</label>
	<div class="col-md-6">
		<input  id="section" type="section" class="form-control" name="section" value="{{ old('section') }}">
		@if ($errors->has('section'))
			<span class="help-block">	
				<strong> {{ $errors->first('section') }}</strong>
			</span>
		@endif
	</div>
	</div>