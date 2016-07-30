<table class="table table-stripped">
<caption>{!! $users->links() !!}</caption>
	<tr>
		<th>#</th>
		<th>{{ trans('gparish.names') }}</th>
		<th>{{ trans('gparish.province') }}</th>
		<th>{{ trans('gparish.prayer_family') }}</th>
		<th>{{ trans('gparish.section') }}</th>
		<th>{{ trans('gparish.telephone') }}</th>
	</tr>
	<?php $counter = 1 ;?>
	@foreach ($users as $user)
		<tr>
			<td>{{ $counter++ }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->province }}</td>
			<td>{{ $user->prayer_family }}</td>
			<td>{{ $user->section }}</td>
			<td>{{ $user->telephone }}</td>
		</tr>
	@endforeach
</table>