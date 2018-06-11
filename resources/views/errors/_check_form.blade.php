@if($errors->any())
    <div class="alert-container animated fadeInDown z-depth-2">
        <div class="alert-msg">
            <i class="icon-warning fa fa-exclamation-circle margin-right-10"></i>
            <p>Desculpe, não é possível seguir em frente. É necessário corrigir alguns erros.</p>
        </div>
        <div class="alert-itens margin-left-40">
            <ul class="reset-margin">
                @foreach($errors->all() as $error)
                    <li class="bold">{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif