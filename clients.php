<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
        <h2>Clients</h2>
        <div class="input-group mb-3">
            <input type="text" id="clientSearch" class="form-control" placeholder="Search for clients">
        </div>
        <table id="clientsTable" class="table table-bordered">
            <!-- Client data will be displayed here -->
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
    // Load clients data into the table on page load
    $.ajax({
        url: 'get_clients.php',
        type: 'GET',
        success: function (data) {
            $('#clientsTable').html(data);
        }
    });

    // Update favorite status in the database when checkbox is clicked
    $(document).on('change', '.favorite-checkbox', function () {
        var clientId = $(this).data('id');
        var isFavorite = $(this).prop('checked') ? 1 : 0;
        $.ajax({
            url: 'update_clients.php',
            type: 'POST',
            data: { id: clientId, favorite: isFavorite },
            success: function (response) {
                console.log(response);
            }
        });
    });
    
    // Handle client search on input change
    $('#clientSearch').on('input', function () {
        var searchTerm = $(this).val();
        $.ajax({
            url: 'search_client.php',
            type: 'POST',
            data: { search: searchTerm },
            success: function (data) {
                $('#clientsTable').html(data);
            }
        });
    });
});

    </script>
</body>

</html>
