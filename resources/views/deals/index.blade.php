<!-- resources/views/deals/index.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container mt-5">
    <h1>List of Deals</h1>

    <a href="{{ route('deals.create') }}" class="btn btn-primary mb-3">Create New Deal</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Closing Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deal)
            <tr>
                <td>{{ $deal->name }}</td>
                <td>{{ $deal->amount }}</td>
                <td>{{ $deal->closing_date }}</td>
                <td>
                    <a href="{{ route('deals.show', $deal->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                    <a href="{{ route('deals.edit', $deal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
