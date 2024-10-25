@extends('custom-layouts.master')
@section('title', '')
@push('css')
    <style>
        .application_table_row {
            transition: .2s;
            cursor: pointer;
        }
    </style>
@endpush
@section('content')
    <div>
        <div class="card">
            <h5 class="m-4">Records</h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="application_index_table">
                        <thead>
                        <tr>
                            <th scope="col" class="text-nowrap">#</th>
                            <th scope="col" class="text-nowrap">Name</th>
                            <th scope="col" class="text-nowrap">Daag Number</th>
                            <th scope="col" class="text-nowrap">Mouja</th>
                            <th scope="col" class="text-nowrap">Khotian</th>
                            <th scope="col" class="text-nowrap">Buyer</th>
                            <th scope="col" class="text-nowrap">Seller</th>
                            <th scope="col" class="text-nowrap">Submission Time</th>
                            <th scope="col" class="text-nowrap">Action</th>
                        </tr>
                        </thead><tbody>
                        @if(count($records))
                            @foreach($records as $record)
                                <tr class="application_table_row" data-application-id="{{ $record->id }}" title="Show Details">
                                    <th scope="row" class="text-nowrap">{{ $loop->iteration + ($records->currentPage() - 1) * $records->perPage() }}</th>
                                    <td class="text-nowrap">{{ $record->name }}</td>
                                    <td class="text-nowrap">{{ $record->daag_number }}</td>
                                    <td class="text-nowrap">{{ $record->mouja }}</td>
                                    <td class="text-nowrap">{{ $record->khotian }}</td>
                                    <td class="text-nowrap">{{ $record->buyer_name }}</td>
                                    <td class="text-nowrap">{{ $record->seller_name }}</td>
                                    <td class="text-nowrap">{{ $record->created_at ? $record->created_at->format('h:i A, D, d M Y') : 'N/A' }}</td>
                                    <td class="d-flex align-items-center">
                                        <a href="" class="btn btn-warning btn-sm">Show</a>
{{--                                        @if(auth()->user()->type == config('app.ADMIN_TYPE.SUPER_ADMIN'))--}}
                                            <a href="" class="btn btn-primary btn-sm ml-1">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm ml-1 " data-toggle="modal" data-target="#deleteConfirmationModal" data-id="{{ $record->id }}">
                                                Delete
                                            </button>
{{--                                        @endif--}}
                                        <a href="" class="btn btn-success btn-sm ml-1">Resend</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div>
            {{ $records->appends(request()->query())->links() }}
        </div>
    </div>
@endsection

@section('modal')
@endsection

