

<html lang="tr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>

        *{ font-family: DejaVu Sans !important;}

        /*body {*/
        /*    font-family: Arial, sans-serif;*/
        /*}*/

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
            border: 1px solid #000000;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right ;
            background-color: #f2f2f2;


        }

        .sol {
            float: left ;
        }

        .sag {
            float: right;
        }






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
                    <br><br>

        <div class="sol">
                    <p>
                        Müşteri Adı Soyadı: {{$muhasebe->musteri_adsoyad}}
                        <br>
                        Telefon:  {{$muhasebe->telefon}}
                        <br>
                        E-posta: {{$muhasebe->email}}
                        <br>
                        Adres: {{$muhasebe->adres}}
                    </p>
        </div>

        <div class="sag">
                    <p>
                        Fatura Tarihi:  {{$muhasebe->fatura_tarihi}}
                        <br>
                        Fatura No: {{$muhasebe->fatura_no}}
                        <br>
                        Vergi No: {{$muhasebe->vergi}}

                    </p>
        </div>

                    <br><br><br><br><br>

                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Adet</th>
                        <th>Birim Fiyat</th>
                        <th>Toplam</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$muhasebe->urun}}</td>
                        <td>{{$muhasebe->adet}}</td>
                        <td>{{$muhasebe->birim_fiyat}}</td>
                        <td>${{$toplam = $muhasebe->adet * $muhasebe->birim_fiyat}}.00</td>
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
                    <p><b>Toplam Tutar:  ${{$toplam}}</b></p>
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
</body>
</html>
