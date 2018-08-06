    $(document).ready(function() {
        //clabe id
        OpenPay.setId('m4nfgskfrdp587hw8pi5');
        //llave publica
        OpenPay.setApiKey('pk_2b0b767fc88b43e79b8d5a55c42f923e');
        OpenPay.setSandboxMode(true);
        //Se genera el id de dispositivo
        var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

        $('#pay-button').on('click', function(event) {
            event.preventDefault();
            $("#pay-button").prop( "disabled", true);
            OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
        });

        var sucess_callbak = function(response) {
            var token_id = response.data.id;
            $('#token_id').val(token_id);
            var nombre = response.data.card.holder_name;
            $('#nombre').val(nombre);
            if (response.data.card.points_card) {
                 // Si la tarjeta permite usar puntos, mostrar el cuadro de diálogo
                 $("#card-points-dialog").modal("show");
             } else {
                 // De otra forma, realizar el pago inmediatamente
                 $('#payment-form').submit();
             }
            //$('#payment-form').submit();
        };

        var error_callbak = function(response) {
            var desc = response.data.description != undefined ? response.data.description : response.message;
            alert("ERROR [" + response.status + "] " + desc);
            $("#pay-button").prop("disabled", false);
        };

        $("#points-yes-button").on('click', function(){
            $('#use_card_points').val('true');
            $('#payment-form').submit();
        });

        $("#points-no-button").on('click', function(){
            $('#use_card_points').val('false');
            $('#payment-form').submit();
        });

    });
