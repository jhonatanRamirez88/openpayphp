<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <link href="/openpay/resources/css/style.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="bkng-tb-cntnt">
        <?php 
            if(isset($_GET["mensaje"])){?>
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?php echo $_GET["mensaje"]; ?></strong>
              </div>
        <?php
            }
        ?>
        <div class="pymnts">
            <form action="buscarreferencia.php" method="POST" id="payment-form">
                <input type="hidden" name="token_id" id="token_id">
                <div class="pymnt-itm card active">
                    <h2>Buscar referencía</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="credit"><h4>Tarjetas de crédito</h4></div>
                            <div class="debit"><h4>Tarjetas de débito</h4></div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Número de referencía</label><input type="text" placeholder="Número de referencía" autocomplete="off" name="numero_referencia" >
                            </div>
                            <div class="sctn-row" style="width: 40%">
                                <a class="button rght" id="pay-button">Buscar</a>
                            </div>
                            <div class="openpay"><div class="logo">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
          $(document).ready(function() {
            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop( "disabled", true);
                $('#payment-form').submit();
            });
          });
    </script>
</body>
</html>
