<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>Form Submissions</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Form Submissions</h2>
        <table class="table table-striped" id="submissionsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>File Paths</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submissions as $submission)
                    <tr>
                        <td>{{ $submission->id }}</td>
                        <td>{{ $submission->name }}</td>
                        <td>{{ $submission->email }}</td>
                        <td>{{ $submission->message }}</td>
                        <td>
                            @if ($submission->file_paths)
                                @php
                                    $filePaths = json_decode($submission->file_paths);
                                @endphp
                                <ul>
                                    @foreach ($filePaths as $filePath)
                                        <li><a href="{{ Storage::url($filePath) }}">{{ basename($filePath) }}</a></li>
                                    @endforeach
                                </ul>
                            @else
                                No files uploaded
                            @endif
                        </td>
                        <td>{{ $submission->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submissionsTable').DataTable();
        });
    </script>
</body>

</html>
