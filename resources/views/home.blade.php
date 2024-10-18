<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>polices</title>
</head>
<body>
   <h2>Invoices</h2>

    @can('show', 'App\\Models\Invoice')
        <a href="">Create invoice</a>
    @endcan

    <form action="{{ route('invoice.store') }}" method="post">
        @csrf
        <button type="submit">Create invoice</button>
    </form>

</body>
</html>