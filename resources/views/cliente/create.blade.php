<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adcionar Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
        <form action="{{route('cliente.store')}}" method="post">
            @csrf
            
            <label for="nomcli">Nome do cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli"/><br/>
            <label for="cpfcli">cpf do cliente</label><br/>
            <input type="text" name="cpfcli" id="cpfcli"/><br/>
            <label for="endcli">endereço do cliente</label><br/>
            <input type="text" name="endcli" id="endcli"/><br/>
            <label for="numcli">numero da residencia do cliente</label><br/>
            <input type="text" name="numcli" id="numcli"/><br/>
            <label for="baicli">bairro do cliente</label><br/>
            <input type="text" name="baicli" id="baicli"/><br/>
            <label for="cid">cidade do cliente</label><br/>
            <input type="text" name="cidcli" id="cidcli"/><br/>
            <label for="ufcli">Estado do cliente</label><br/>
            <input type="text" name="ufcli" id="ufcli"/><br/>
            <label for="telcli">telefone do cliente</label><br/>
            <input type="text" name="telcli" id="telcli"/><br/><br/>
            <button type="submit">Adicionar</button>
            
        </form>
        
    </body>
</html>
