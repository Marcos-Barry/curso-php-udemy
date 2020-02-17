<?php

                  session_start();
                  include('validacao.php');

                  if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE)
                  {
                  header("Location:index.php");
                  }
                  else
                  {
                  $usuario = $_SESSION['logado'];
                  }

            $resultado = ("select * from usuarios where usuarios.usuario = '$usuario'");
         $user = mysql_query($resultado);

         while ($row = mysql_fetch_array($user))
            {
               $coduser = $row['id'];
            }


         //Define zona atual
         date_default_timezone_set("Brazil/East");
         //Conecta
         $strcon = mysqli_connect("localhost", "id2138007_root", "projeto$#", "id2138007_db_mwdonline") or die('Erro ao conectar ao banco de dados');
         //Váriaveis recebidas pelo POST
         //Recebe data do diário
         $data          =   isset($_POST['data']) ? $_POST['data'] : '';
         $data          =   implode("-",array_reverse(explode("/", $data)));//Converte data para valor de SQL
         $Assunto   =   isset($_POST['assunto']) ? $_POST['assunto'] : '';
         $Referencias   =   isset($_POST['referencia']) ? $_POST['referencia'] : '';
         $Atividades    =   isset($_POST['atividade']) ? $_POST['atividade'] : '';
         $Dificuldades  =   isset($_POST['dificuldade']) ? $_POST['dificuldade'] : '';
         $Orientacao    =   isset($_POST['orientacao']) ? $_POST['orientacao'] : '';
         $Orientacaoprox=   isset($_POST['orientacaoprox']) ? $_POST['orientacaoprox'] : '';

         $procura = mysqli_query($strcon, "SELECT * FROM tbdiario WHERE dt_diario = '$data'");
         $result_data = mysqli_num_rows($procura); //Obtém o número de linhas em um resultado
         if($result_data>0){ $message = "<script>confirm('Diário já cadastrado!', ";
             //Apenas deixa voltar
         }
         //Senao, segue o jogo
         else{
             //Verifica SE agora é 00h
             //&& SE os minutos são menores ou iguais a 2
             //&& SE o dia do diário é o mesmo que o atual
             if (idate("H")==0 && !idate("i")<=2 && $data!=date("Y-m-d", time())) {
                 //Avisa a falha
                 $message = "<script>confirm('Hora inválida para envio do diário!', ";
             }
             else {
                 //Exibe aviso bom
                 //echo "<script>alert('Hora válida');</script>";
                 // Tenta se conectar ao servidor MySQL
                 mysql_connect('localhost', 'id2138007_root', 'projeto$#') or trigger_error(mysql_error());
                 // Tenta se conectar a um banco de dados MySQL
                 mysql_select_db('id2138007_db_mwdonline') or trigger_error(mysql_error());
                 //Código do diário, sendo unico está sendo incrementado manualmente
                 $query = mysql_query("SELECT max(cd_diario) as cd_diario from tbdiario");
                 $array = mysql_fetch_assoc($query);
                 $Codigo= (int) $array["cd_diario"];
                 $Codig = $Codigo+1;

                 //Cria insert com cada row do SQL
                 $sql="INSERT INTO tbdiario (cd_diario, dt_diario, ds_assunto, ds_referencias, ds_atv_prevista, ds_dificuldades, ds_propostas, ds_sugestoes)VALUES";
                 //Concatena na variável os dados que serão inseridos
                 $sql.= "('$Codig', '$data', '$Assunto', '$Referencias','$Atividades', '$Dificuldades', '$Orientacao', '$Orientacaoprox')";
                 //Executa este insert no query
                 mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar diario");
                 //Fecha banco
                 mysqli_close($strcon);
                 $message = "<script>confirm('Diário Cadastrado com Sucesso!', ";
             }
         }
         //Exibe mensagem final
         //Redireciona de volta
         echo $message."window.location.href='diario.php')</script>";
         ?>