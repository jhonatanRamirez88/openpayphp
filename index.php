<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
   <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
   <script type="text/javascript" src="/openpay/resources/js/openpay.js"></script>
   <link href="/openpay/resources/css/style.css" rel="stylesheet" type="text/css"  />

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bkng-tb-cntnt">
        <div class="pymnts">
            <form action="openpaypago.php" method="POST" id="payment-form">
                <input type="hidden" name="token_id" id="token_id">
                <input type="hidden" name="monto" id="monto" value="<?php echo $_GET['monto'] ?>">
                <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $_GET['descripcion'] ?>">
                <input type="hidden" name="nombre" id="nombre" value="">
                <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="credit"><h4>Tarjetas de crédito</h4></div>
                            <div class="debit"><h4>Tarjetas de débito</h4></div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Número de referencía</label><input type="text" autocomplete="off" name="referencia" value="<?php echo $_GET['numero_referencia'] ?>" disabled="true">
                            </div>
                            <div class="sctn-col">
                                <label>Monto</label><input type="text" autocomplete="off" name="monto" value="<?php echo $_GET['monto'] ?>" disabled="true">
                            </div>
                        </div>
                        <div class="sctn-row">

                            <div class="sctn-col l" style="width: 100%;">
                                 <label>Descripción</label><input type="text" style="width: 95%" name="descripcion" value="<?php echo $_GET['descripcion'] ?>" disabled="true">
                            </div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col" style="width: 100%;">
                                <label>Dirección</label><input type="text" style="width: 95%;" name="direccion" value="<?php echo $_GET['direccion'] ?>" disabled="true">
                            </div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Nombre del titular</label><input type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                            </div>
                            <div class="sctn-col">
                                <label>Número de tarjeta</label><input type="text" autocomplete="off" data-openpay-card="card_number">
                            </div>
                        </div>
                        <div class="modal fade" role="dialog" id="card-points-dialog">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Pagar con Puntos</h4>
                              </div>
                              <div class="modal-body">
                                <p>¿Desea usar los puntos de su tarjeta para realizar este pago?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="points-no-button">No</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="points-yes-button">Si</button>
                              </div>
                            </div>
                          </div>
                        </div>
                            <div class="sctn-row">
                                <div class="sctn-col l">
                                    <label>Fecha de expiración</label>
                                    <div class="sctn-col half l"><input type="text" placeholder="Mes" data-openpay-card="expiration_month"></div>
                                    <div class="sctn-col half l"><input type="text" placeholder="Año" data-openpay-card="expiration_year"></div>
                                </div>
                                <div class="sctn-col cvv"><label>Código de seguridad</label>
                                    <div class="sctn-col half l"><input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2"></div>
                                </div>
                            </div>
                            <div class="openpay"><div class="logo">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                        <div class="sctn-row">
                                <a class="button rght" id="pay-button">Pagar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
