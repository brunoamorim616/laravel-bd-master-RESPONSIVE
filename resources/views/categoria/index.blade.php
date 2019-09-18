<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    </head>
    <body>
        
        <script>
            
            function eliminarCategoria(idForm, destino){
                dadosForm = $('#'+idForm).serialize();
                $.ajax({
                    method: 'post',
                    url: destino,
                    data: dadosForm,
                    dataType: 'html',
                    sucess: function(data) {
                        //Sucesso
                        if(data == 'true'){
                            alert('Categoria Eliminada');
                        }else {
                            alert('Nao foi possivel eliminar a categoria');
                        }
                    },
                    error: function(argument) {
                        //Erro
                        alert('Nope');
                    }
                });
                return false;
            }
            
        </script>
        
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a><br/>
        
        <!-- Listagem de categorias -->
        <table style="width: 50%;">
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>
            
            <tbody>
                
                @foreach ($categorias as $c)
                
                <tr>
                    <td>{{$c->codcat}}</td>
                    <td>{{$c->nomcat}}</td>
                    <td>
                        
                        <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                        
                        <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                        </form>
                    
                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>
        
    </body>
</html>
