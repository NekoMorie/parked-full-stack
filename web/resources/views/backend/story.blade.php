@extends('backend.layout.app')

@section('contentAdmin')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-4">History Form</h2>
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table table-striped table-hover row-border" id="historyTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyTableBody">
                                        @foreach ($userHistory as $i => $fm)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td>{{ $fm->created_at }}</td>
                                                <td>{{ $fm->first_name }}{{ $fm->last_name }}</td>
                                                <td>
                                                    <button class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#infoModal{{ $fm->id }}">
                                                        <i class="fa-brands fa-readme text-white"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="infoModal{{ $fm->id }}" tabindex="-1"
                                                aria-labelledby="infoModalLabel{{ $fm->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadDetailsModalLabel">Detail
                                                                History</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" id="uploadDetailsBody">
                                                            {{ $fm->first_name }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for viewing upload details -->
@endsection
