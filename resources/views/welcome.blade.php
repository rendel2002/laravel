<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }
        .pdf-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Welcome to the Inventory System</h1>
        <p>This is a simple data display.</p>

     
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Computer Monitor</td>
                        <td>1</td>
                        <td>₱10,000</td>
                        <td>
                        <div class="text-center ">
            <a href="{{ url('/pdf') }}" target="_blank" class="btn btn-primary">PDF View</a>
        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Office Chair</td>
                        <td>2</td>
                        <td>₱5,000</td>
                        <td>
                        <div class="text-center ">
            <a href="{{ url('/pdf') }}" target="_blank" class="btn btn-primary">PDF View</a>
        </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


      
    </div>



</body>
</html>
