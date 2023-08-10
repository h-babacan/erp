<!DOCTYPE html>
<html>
<head>
    <title>Fatura Ekle</title>
</head>
<body>
<h1>Fatura Ekle</h1>
<form action="{{ route('fatura.kaydet') }}" method="post">
    @csrf
    <label for="fatura_no">Fatura Numarası:</label>
    <input type="text" name="fatura_no" required><br>

    <label for="tutar">Fatura Tutarı:</label>
    <input type="number" name="tutar" step="0.01" required><br>

    <button type="submit">Fatura Ekle</button>
</form>
</body>
</html>
