<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Fatura Yazdır</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <style>      body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            height: 730px;
            margin: 0 auto;

            padding: 80px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-info p {
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right;
        }

        .
    </style>
</head>
<body>
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">

            <div class="container">
                <div class="header">
                    <h1>E-Fatura</h1>
                </div>
                <div class="invoice-info">

                    <p>
                        Müşteri Adı:
                        <br>
                        Telefon:
                        <br>
                        E-posta: Company@mail.com
                        <br>
                        Adres: top on the world
                    </p>

                    <p>
                        Fatura Tarihi: Company A
                        <br>
                        Fatura No: 2654656
                        <br>
                        Vergi No: Company A
                        <br>

                    </p>


                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>2</td>
                        <td>$50.00</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>3</td>
                        <td>$30.00</td>
                        <td>$90.00</td>
                    </tr>
                    <tr>
                        <td>Product 3</td>
                        <td>3</td>
                        <td>$30.00</td>
                        <td>$90.00</td>
                    </tr>
                    <tr>
                        <td>Product 4</td>
                        <td>3</td>
                        <td>$30.00</td>
                        <td>$90.00</td>
                    </tr>
                    <tr>
                        <td>Product 5</td>
                        <td>3</td>
                        <td>$30.00</td>
                        <td>$90.00</td>
                    </tr>

                </table>
                <div class="total">
                    <p>Total Amount: $190.00</p>
                </div>
            </div>
            </tbody>




        </div>
    </div>
</div>
<!-- /.invoice -->
</div><!-- /.col -->
</div><!-- /.row -->
</tbody>
</table>

<!-- ./wrapper -->
<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>
</body>
</html>
