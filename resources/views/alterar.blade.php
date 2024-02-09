@extends('padrao')
@section('content')
<div class="container">
<form class="row g-3" method="Post" action="{{route('alterarBanco-cadastro',$cadastro->id)}}">
@method('put')
  @csrf
  <div class="col-md-4">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" 
value="{{$cadastro->nomeCadastro}}" name='nomeCadastro' id="inputNome">
  </div>
  <div class="col-md-2">
    <label for="inputTurma" class="form-label">Turma</label>
    <input type="text" class="form-control" 
value="{{$cadastro->turmaCadastro}}" name='turmaCadastro' id="inputTurma">
  </div>
  <div class="col-md-6">
    <label for="inputResponsaveis" class="form-label">Nome dos responsaveis</label>
    <input type="text" class="form-control" 
value="{{$cadastro->respCadastro}}" name='respCadastro' id="inputResponsaveis">
  </div>
  <div class="col-2">
    <label for="inputFone" class="form-label">Telefone dos responsaveis</label>
    <input type="text" class="form-control" value="{{$cadastro->foneCadastro}}" name='foneCadastro' id="inputFone" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email dos responsaveis</label>
    <input type="e-mail" class="form-control" value="{{$cadastro->emailCadastro}}"name='emailCadastro' id="inputEmail">
  </div>
  <div class="col-10">
    <label for="inputEndereco" class="form-label">Enderenço</label>
    <input type="text" class="form-control" value="{{$cadastro->endCadastro}}" name='endCadastro' id="inputEndereco" placeholder="Apartamento,bloco,e número">
  </div>
  <div class="col-md-15">
    <label for="inputRelatorio" class="form-label">Relatorio</label>
    <input type="text" class="form-control" value="{{$cadastro->relCadastro}}" name='relCadastro' id="inputRelatorio">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
@endsection