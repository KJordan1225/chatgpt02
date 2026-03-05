<!DOCTYPE html>
<html>
 
<head>
    <title>Laravel 12 How to Integrate ChatGPT API Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
 
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-center text-white">
                        Laravel 12 How to Integrate ChatGPT API Example
                    </div>
                    <div class="card-body">
 
                        <form method="POST" action="{{ route('chatgpt') }}">
                            @csrf
 
                            <div class="mb-3">
                                <label for="prompt" class="form-label">
                                    Prompt
                                </label>
 
                                <input type="text" class="form-control" id="prompt" name="prompt"
                                    placeholder="Enter your prompt" required>
                            </div>
 
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </form>
                        @if (!empty($output))
                            <div class="mt-5">
                                <strong>Result: </strong>
                                {{ $output }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
</body>
 
</html>