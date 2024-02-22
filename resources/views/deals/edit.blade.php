<!-- resources/views/deals/edit.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- resources/views/deals/edit.blade.php -->
<!-- resources/views/deals/edit.blade.php -->
<!-- resources/views/deals/edit.blade.php -->
<div class="container mt-5">
    <h1 class="mb-4">Edit Deal</h1>
    <form method="POST" action="{{ route('deals.update', $deal->id) }}" class="row g-3">
        @csrf
        @method('PUT')
        
        <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" value="{{ $deal->name }}" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" name="amount" value="{{ $deal->amount }}" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="closing_date" class="form-label">Closing Date:</label>
            <input type="date" name="closing_date" value="{{ $deal->closing_date }}" class="form-control" required>
        </div>

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Update Deal</button>
        </div>
    </form>
</div>

