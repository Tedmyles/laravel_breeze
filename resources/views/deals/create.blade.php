<!-- resources/views/deals/create.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="mt-5 mb-4">Create Deal</h1>

    <form method="POST" action="{{ route('deals.store') }}" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>

        <div class="mb-3">
            <label for="closing_date" class="form-label">Closing Date:</label>
            <input type="date" class="form-control" id="closing_date" name="closing_date" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Deal</button>
    </form>
</div>
