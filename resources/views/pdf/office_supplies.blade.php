<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <table style="width:100%; table-layout: fixed;">
        <tr>
            <td colspan="7" style="text-align: center; font-weight: bold; height: 5%; font-family: Calibri, sans-serif; ">OFFICE SUPPLIES</td>
        </tr>

        <tr style="font-family: Calibri, sans-serif;">
            <th colspan="2" style="text-align: left; height: 3%; font-size: 15px">Stock No:</th>
            <th colspan="3" style="text-align: left; ">ITEM DESCRIPTION</th>
            <th>UNIT</th>
            <th>BRAND</th>

        </tr>


        @for ($i = 0; $i < 40; $i++)
            <tr>
            <td colspan="2" style="height: 1%; font-family: Calibri, sans-serif;"></td>
            <td colspan="3">hello</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            </tr>
            @endfor

    </table>
</body>

</html>
