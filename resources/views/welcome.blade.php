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
        <h1> Inventory Custodian Slip</h1>

     
        <a href="{{ url('/pdf/inventory-slip') }}" target="_blank" class="btn btn-primary mt-3">View Inventory Slip PDF</a>

<a href="{{ url('/pdf/journal-entry') }}" target="_blank" class="btn btn-success mt-3">View Journal Entry PDF</a>


        </div>
                   
       


      
    </div>

    



</body>
</html>
