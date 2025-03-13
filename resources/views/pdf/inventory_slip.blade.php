<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Custodian Slip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        .appendix {
            font-style: italic;
            font-size: 16px;
            position: absolute;
            right: 30px;
        }
        .box {
            width: 100%;
            margin-top: 15px;
            max-width: 670px;
            padding: 10px;
            text-align: center;
            font-size: 1rem;

        }
        .header-box {
            border: 2px solid black; 
            padding: 10px;
            text-align: center;
        }
        .header-info1 {
            display: flex;
           margin-top: 10px;
            justify-content: space-between;
        }
        .header-info1 div {
            flex: 1;
            text-align: left;
        }
        .table-container {
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #e9ecef;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <span class="appendix">Appendix 52</span>
    <div class="box">
        <!-- Box for title and fields -->
        <div class="header-box">
            <h5 style="font-size: 1rem;">INVENTORY CUSTODIAN SLIP</h5>
            <div class="header-info1">
                <div>LGU: ____________________</div>
                <div>ICS No: ____________________</div>
                <div style="text-align: right">Fund: ____________________</div>
            </div>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th rowspan="2">QTY</th>
                    <th rowspan="2">Unit</th>
                    <th colspan="2">Amount</th>
                    <th rowspan="2">Description</th>
                    <th rowspan="2">Inventory Item No.</th>
                    <th rowspan="2">Estimated Useful Life</th>
                </tr>
                <tr>
                    <th>Unit Cost</th>
                    <th>Total Cost</th>
                </tr>
                <tr>
                    <td style="height: 400px;">1</td>
                    <td style="height: 400px;">PC</td>
                    <td style="height: 400px;">40000</td>
                    <td style="height: 400px;">40000</td>
                    <td style="height: 400px;">Computer Monitor</td>
                    <td style="height: 400px;">5</td>
                    <td style="height: 400px;">5</td>
                </tr>
                
            </table>
        </div>

        <table style="width: 100%; text-align: center; border-collapse: collapse;">
            <tr>
                <td style="border: 2px solid black;">
                    <div style="text-align: left; font-weight: bold;">Received from:</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Signature Over Printed Name</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Position/Office</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Date</div>
                </td>
                <td style="border: 2px solid black;">
                    <div style="text-align: left; font-weight: bold;">Received by:</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Signature Over Printed Name</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Position/Office</div>
                    <div style="border-bottom: 2px solid black; width: 70%; margin: 30px auto;"></div>
                    <div>Date</div>
                </td>
            </tr>
            
        </table>
        <div style="text-align: left; font-weight: bold;">For Use of Supply and/or Property Division/Unit </div>

    </div>

</body>
</html>
