<?php
        if (isset($_GET['codMsg'])) {
          $codMsg = $_GET['codMsg'];
          
          switch ($codMsg) {
            case '001':
              $classeMensagem = 'alert-danger';
              $textoMensagem = "Email já cadastrado.";
              break;
            
            case '002':
              $classeMensagem = 'alert-danger';
              $textoMensagem = "Usúario ou senha incorretos.";
              break;
            
              case '003':
                $classeMensagem = 'alert-danger';
                $textoMensagem = "As senhas estão diferentes.";
                break;
          }

          if (!empty($textoMensagem)) {
            echo "
            <div class='row'>
              <div class='col-sm-4 '></div>
                <div class='col-sm-4'>
                  <div class='alert $classeMensagem alert-warning alert-dismissible fade show' role='alert'>
                  $textoMensagem
                  </div>
                </div>
              <div class='col-sm-4'></div>
            </div>
              ";
          }
        }
      ?>