<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">

        @if(Session::has('message'))
        <p class="alert alert-success mt-3">{{ Session::get('message') }}</p>
        @endif

        @if(Session::has('error'))
        <p class="alert alert-danger mt-3">{{ Session::get('error') }}</p>
        @endif
        <div class="card">
            <div class="card-body">
                @if($usuario->id == "")
                <form action="usuario" method="POST">
                    @else
                    {{ Form::model('', array('route' => array('usuario.update', $usuario->id), 'method' => 'PUT')) }}
                    @endif
                    @csrf


                    <div class="form-group">
                        <input type="hidden" value="{{$usuario->id}}">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" value="{{$usuario->nome}}" required placeholder="Nome">

                    </div>

                    <div class="form-group">
                        <input type="hidden" value="{{$usuario->id}}">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$usuario->email}}" required placeholder="Digite aqui seu email">

                    </div>

                    <div class="form-group">
                        <input type="hidden" value="{{$usuario->id}}">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha" aria-describedby="emailHelp" value="{{$usuario->senha}}" required placeholder="Digite aqui sua senha">

                    </div>

                    <div class="form-group">
                        <input type="hidden" value="{{$usuario->id}}">
                        <label>Data Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" aria-describedby="emailHelp" value="{{$usuario->dataNascimento}}" required>

                    </div>


                    @if($usuario->id == "")
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    @else
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    @endif
                </form>
            </div>
        </div>


        <br>

        <div class="card">
            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E=mail</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>

                    @foreach($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <td>{{$usuario->nome}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->senha}}</td>
                        <td>{{$usuario->dataNascimento}}</td>
                        <td>

                            {{Form::open(['route'=>['usuario.edit',$usuario->id], 'method'=>'GET'])}}
                            {{Form::submit('Editar', ['class'=>'btn btn-info btn-sm col-md-12'] )}}
                            {{Form::close()}}

                        </td>
                        <td>
                            {{Form::open(['route'=>['usuario.destroy',$usuario->id], 'method'=>'DELETE'])}}
                            {{Form::submit('Excluir', ['class'=>'btn btn-danger btn-sm col-md-12'] )}}
                            {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <footer>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>
</body>