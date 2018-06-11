@extends('template.default')

@section('content')
    <div class="titulo-pag container">
        <h1>Agenda</h1>
        <h2>Novo Contato</h2>
        <hr>
        <div class="col s12">
            {!! Form::open(['route' => 'contato.store', 'method' => 'post']) !!}
            <div class="row">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input placeholder="Insira o Nome do Contato" name="contato[nome]" id="contato[nome]"
                               type="text" required/>
                        <label for="contato[nome]">Nome</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">credit_card</i>
                        <the-mask mask="###.###.###-##" placeholder="Insira o CPF do Contato" name="contato[cpf]" id="cpf"
                                  type="text" required></the-mask>
                        <label for="cpf">CPF</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <input placeholder="Insira o Email do Contato" id="email" type="email"
                               class="validate" name="contato[email]">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <the-mask mask="##/##/####" placeholder="Insira a Data de Nascimento do Contato"
                                  id="data_nascimento"
                                  name="contato[data_nascimento]"
                                  class="datepicker"
                                  required></the-mask>
                        <label for="data_nascimento">Data de Nascimento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix"></i>
                        {!! Form::select('telefones[tipo_telefone]', ['fixo' => 'Telefone Fixo', 'celular' => 'Telefone Celular'], ['class' => 'offset-2']) !!}
                        <label for="telefones[tipo]">Tipo de Telefone</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <the-mask :mask="['(##) ####-####', '(##) #####-####']"
                                  placeholder="Insira o Telefone do contato"
                                  id="telefones[numero]"
                                  name="telefones[numero]"
                                  type="text" required></the-mask>
                        <label for="telefones[numero]">Telefone</label>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col s12 center-align">
                            <a href="{{route('index')}}" class="btn red darken-4">Voltar</a>
                            <button class="btn green-blue darken-4" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection