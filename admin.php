<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Add a Client</h2>
        <form id="clientForm" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="NomClient" class="form-label">Client Name:</label>
                <input type="text" class="form-control" id="NomClient" name="NomClient" required>
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Category:</label>
                <select class="form-select" id="categorie" name="categorie" required>
                    <option value="Industrie et BTP">Industrie et BTP</option>
                    <option value="Banque et Assurance">Banque et Assurance</option>
                    <option value="Education">Education</option>
                    <option value="Ministères, Administrations et Entreprises Publiques">Ministères, Administrations et Entreprises Publiques</option>
                    <option value="Services">Services</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Logo" class="form-label">Logo:</label>
                <input type="file" class="form-control" id="Logo" name="Logo" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#clientForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: 'add_client.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === 'success') {
                            // Show a Bootstrap alert
                            $('.alert').remove(); // Remove any existing alerts
                            $('#clientForm').prepend('<div class="alert alert-success">Client added successfully.</div>');

                            // Clear all form inputs
                            $('#clientForm')[0].reset();
                        } else {
                            // Show a Bootstrap alert for failure
                            $('.alert').remove(); // Remove any existing alerts
                            $('#clientForm').prepend('<div class="alert alert-danger">Failed to add client. Please try again.</div>');
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>