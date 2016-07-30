	<div class="form-group {{ $errors->has('address')? 'has-error':'' }}">
	<label for="address" class="col-md-4 control-label">{{ trans('gparish.address') }}</label>
	<div class="col-md-6">
		<input  id="address" type="address" class="form-control" name="address" value="{{ old('address') }}">
		@if ($errors->has('address'))
			<span class="help-block">	
				<strong> {{ $errors->first('address') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('baptism_in_water')? 'has-error':'' }}">
	<label for="baptism_in_water" class="col-md-4 control-label">{{ trans('gparish.baptism_in_water') }}</label>
	<div class="col-md-6">
		<input  id="baptism_in_water" type="baptism_in_water" class="form-control" name="baptism_in_water" value="{{ old('baptism_in_water') }}">
		@if ($errors->has('baptism_in_water'))
			<span class="help-block">	
				<strong> {{ $errors->first('baptism_in_water') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('baptism_in_water_date')? 'has-error':'' }}">
	<label for="baptism_in_water_date" class="col-md-4 control-label">{{ trans('gparish.baptism_in_water_date') }}</label>
	<div class="col-md-6">
		<input  id="baptism_in_water_date" type="baptism_in_water_date" class="form-control" name="baptism_in_water_date" value="{{ old('baptism_in_water_date') }}">
		@if ($errors->has('baptism_in_water_date'))
			<span class="help-block">	
				<strong> {{ $errors->first('baptism_in_water_date') }}</strong>
			</span>
		@endif
		</div>
	</div>
	<div class="form-group {{ $errors->has('baptism_in_spirit')? 'has-error':'' }}">
	<label for="baptism_in_spirit" class="col-md-4 control-label">{{ trans('gparish.baptism_in_spirit') }}</label>
	<div class="col-md-6">
		<input  id="baptism_in_spirit" type="baptism_in_spirit" class="form-control" name="baptism_in_spirit" value="{{ old('baptism_in_spirit') }}">
		@if ($errors->has('baptism_in_spirit'))
			<span class="help-block">	
				<strong> {{ $errors->first('baptism_in_spirit') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('commission_ministry')? 'has-error':'' }}">
	<label for="commission_ministry" class="col-md-4 control-label">{{ trans('gparish.commission_ministry') }}</label>
	<div class="col-md-6">
		<input  id="commission_ministry" type="commission_ministry" class="form-control" name="commission_ministry" value="{{ old('commission_ministry') }}">
		@if ($errors->has('commission_ministry'))
			<span class="help-block">	
				<strong> {{ $errors->first('commission_ministry') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('principal_occupation')? 'has-error':'' }}">
	<label for="principal_occupation" class="col-md-4 control-label">{{ trans('gparish.principal_occupation') }}</label>
	<div class="col-md-6">
		<input  id="principal_occupation" type="principal_occupation" class="form-control" name="principal_occupation" value="{{ old('principal_occupation') }}">
		@if ($errors->has('principal_occupation'))
			<span class="help-block">	
				<strong> {{ $errors->first('principal_occupation') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('trainings_attendend')? 'has-error':'' }}">
	<label for="trainings_attendend" class="col-md-4 control-label">{{ trans('gparish.trainings_attendend') }}</label>
	<div class="col-md-6">
		<input  id="trainings_attendend" type="trainings_attendend" class="form-control" name="trainings_attendend" value="{{ old('trainings_attendend') }}">
		@if ($errors->has('trainings_attendend'))
			<span class="help-block">	
				<strong> {{ $errors->first('trainings_attendend') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('four_principal_words')? 'has-error':'' }}">
	<label for="four_principal_words" class="col-md-4 control-label">{{ trans('gparish.four_principal_words') }}</label>
	<div class="col-md-6">
		<input  id="four_principal_words" type="four_principal_words" class="form-control" name="four_principal_words" value="{{ old('four_principal_words') }}">
		@if ($errors->has('four_principal_words'))
			<span class="help-block">	
				<strong> {{ $errors->first('four_principal_words') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('affermissement')? 'has-error':'' }}">
	<label for="affermissement" class="col-md-4 control-label">{{ trans('gparish.affermissement') }}</label>
	<div class="col-md-6">
		<input  id="affermissement" type="affermissement" class="form-control" name="affermissement" value="{{ old('affermissement') }}">
		@if ($errors->has('affermissement'))
			<span class="help-block">	
				<strong> {{ $errors->first('affermissement') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('spiritual_laws')? 'has-error':'' }}">
	<label for="spiritual_laws" class="col-md-4 control-label">{{ trans('gparish.spiritual_laws') }}</label>
	<div class="col-md-6">
		<input  id="spiritual_laws" type="spiritual_laws" class="form-control" name="spiritual_laws" value="{{ old('spiritual_laws') }}">
		@if ($errors->has('spiritual_laws'))
			<span class="help-block">	
				<strong> {{ $errors->first('spiritual_laws') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('other_trainings')? 'has-error':'' }}">
	<label for="other_trainings" class="col-md-4 control-label">{{ trans('gparish.other_trainings') }}</label>
	<div class="col-md-6">
		<input  id="other_trainings" type="other_trainings" class="form-control" name="other_trainings" value="{{ old('other_trainings') }}">
		@if ($errors->has('other_trainings'))
			<span class="help-block">	
				<strong> {{ $errors->first('other_trainings') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('languages')? 'has-error':'' }}">
	<label for="languages" class="col-md-4 control-label">{{ trans('gparish.languages') }}</label>
	<div class="col-md-6">
		<input  id="languages" type="languages" class="form-control" name="languages" value="{{ old('languages') }}">
		@if ($errors->has('languages'))
			<span class="help-block">	
				<strong> {{ $errors->first('languages') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('primary_school')? 'has-error':'' }}">
	<label for="primary_school" class="col-md-4 control-label">{{ trans('gparish.primary_school') }}</label>
	<div class="col-md-6">
		<input  id="primary_school" type="primary_school" class="form-control" name="primary_school" value="{{ old('primary_school') }}">
		@if ($errors->has('primary_school'))
			<span class="help-block">	
				<strong> {{ $errors->first('primary_school') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('secondary_school')? 'has-error':'' }}">
	<label for="secondary_school" class="col-md-4 control-label">{{ trans('gparish.secondary_school') }}</label>
	<div class="col-md-6">
		<input  id="secondary_school" type="secondary_school" class="form-control" name="secondary_school" value="{{ old('secondary_school') }}">
		@if ($errors->has('secondary_school'))
			<span class="help-block">	
				<strong> {{ $errors->first('secondary_school') }}</strong>
			</span>
		@endif
	</div>
	</div>
	<div class="form-group {{ $errors->has('university')? 'has-error':'' }}">
	<label for="university" class="col-md-4 control-label">{{ trans('gparish.university') }}</label>
	<div class="col-md-6">
		<input  id="university" type="university" class="form-control" name="university" value="{{ old('university') }}">
		@if ($errors->has('university'))
			<span class="help-block">	
				<strong> {{ $errors->first('university') }}</strong>
			</span>
		@endif
	</div>
	</div>	<div class="form-group {{ $errors->has('unable_to_read_and_write')? 'has-error':'' }}">
	<label for="unable_to_read_and_write" class="col-md-4 control-label">{{ trans('gparish.unable_to_read_and_write') }}</label>
	<div class="col-md-6">
		<input  id="unable_to_read_and_write" type="unable_to_read_and_write" class="form-control" name="unable_to_read_and_write" 
		value="{{ old('unable_to_read_and_write') }}">
		@if ($errors->has('unable_to_read_and_write'))
			<span class="help-block">	
				<strong> {{ $errors->first('unable_to_read_and_write') }}</strong>
			</span>
		@endif
		</div>
	</di
	<div class="form-group {{ $errors->has('signature')? 'has-error':'' }}">
	<label for="signature" class="col-md-4 control-label">{{ trans('gparissignature') }}</label>
	<div class="col-md-6">
		<input  id="signature" type="signature" class="form-control" name="signature" value="{{ old('signature') }}">
		@if ($errors->has('signature'))
			<span class="help-block">	
				<strong> {{ $errors->first('signature') }}</strong>
			</span>
		@endif
	</div>
	</div>