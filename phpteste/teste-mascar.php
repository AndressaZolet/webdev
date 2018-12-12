<head>
<title>Formatar Dados</title>
<style type="text/css">
.tabela {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 10px;
}
</style>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }

}
</script>
</head>
<body>
<table width="301" height="160" border="0" cellspacing="0" class="tabela">
  <tr>
    <td height="34" colspan="2" valign="top">Este script formata qualquer tipo de campo.<br>
Veja o Exemplo abaixo</td>
  </tr>
  <tr>
    <td width="32" height="24">Data:</td>
    <td width="265"><input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" ></td>
  </tr>
  <tr>
    <td height="24">Tel.:</td>
    <td><input type="text" name="tel" maxlength="12" OnKeyPress="formatar('##-####-####', this)" ></td>
  </tr>
  <tr>
    <td height="24">Cep:</td>
    <td><input type="text" name="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)" ></td>
  </tr>
  <tr>
    <td height="24">CPF:</td>
    <td><input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" ></td>
  </tr>
  <tr>
    <td height="24">Hora:</td>
    <td><input type="text" name="hora" maxlength="5" OnKeyPress="formatar('##:##', this)" ></td>
  </tr>
  <tr>
    <td colspan="2" valign="bottom">e assim por diante...<br />
&eacute; um codigo bem simples e de grande utilidade. </td>
  </tr>
</table>
</body>
</html>
