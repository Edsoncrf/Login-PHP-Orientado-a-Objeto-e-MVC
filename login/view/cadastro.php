<div class="h-100 row align-items-center">
    <div class="container">
    <?php include 'estrutura/alertas.php';?>
      <div class="row ">
        <div class="col-sm-4 "></div>
        <div class="col-sm-4 ">
          <div class="card bg-dark bg gradiente rounded">
            <div class="card-header bg-white ">
              <h1 class="h3 mb-3 fw-normal " _msthash="522015" _msttexthash="414960">Por favor, faça login.</h1>
            </div>
            <div class="card-body">
              <form method="post" action="controller/CadastroController.php">
                  <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" _mstplaceholder="299455" required>
                  <label for="floatingInput" _msthash="896038" _msttexthash="441363">Nome completo</label>
                  </div>
                  <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" _mstplaceholder="299455" required>
                  <label for="floatingInput" _msthash="896038" _msttexthash="441363">E-mail</label>
                  </div>
                  <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" _mstplaceholder="58318" required>
                  <label for="floatingPassword" _msthash="896285" _msttexthash="58318">Senha</label>
                  </div>
                  <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Senha" _mstplaceholder="58318" required>
                  <label for="floatingPassword" _msthash="896285" _msttexthash="58318">Confirme sua senha</label>
                  </div>

                  <div class="checkbox align-items-center">
                    <button class=" btn btn-lg btn-outline-primary mb-3" type="submit" _msthash="692302" _msttexthash="77766">Cadastrar</button>
                  </div>
                </form>
            </div>
        <div class="col-sm-4 "></div>
      </div>
    </div>
  </div>