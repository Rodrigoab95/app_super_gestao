<h3>Fornecedor</h3>

@php
    //comentário do código

    /*
        comentário do código em múltiplas linhas
    */
    // echo 'Texto de teste'

@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@endif