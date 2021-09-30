@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
					<p>
						<span>
							Users Who haven't Verificate Their Emails Over a Day:
						</span>
						{{ $count }}
					</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Tooked Time To Login</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $key => $user)
								<tr>
									<td> {{ $key + 1 }} </td>
									<td> {{ $user->name }} </td>
									<td> {{ $user->email }} </td>
									<td> {{ $user->loggingInTime }}</td>
									<td> {{ $user->isOnline }} </td>
								</tr>
							@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
