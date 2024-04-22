@extends('admin.layout.master')
@section('main_section')
    <div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex ">
                    <h4 class="mb-3">News Lettes Subscription Emails</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="Datatable">
                        <thead>
                            <tr class="bg-light">
                                <th>Sno</th>
                                <th>Email</th>
                                <th>Subscribtion date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscription as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->created_at->format('M d, Y h:i A') }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
