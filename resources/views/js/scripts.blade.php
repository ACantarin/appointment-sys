<script type="text/javascript">
    $(document).ready(function(){
        M.updateTextFields();
        $('.sidenav').sidenav();
        $('select').formSelect();

        var message = "{{Session::get('alert')}}";

        if (message) {
            alert(message);
        }

        var baseApiUrl = "http://127.0.0.1:8000/api";

        $("#js-patient-document").on("change", function () {
            $.ajax({
                url: baseApiUrl + "/patients/document/" + this.value,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.success == true) {
                        if (response.data) {
                            alert("O CPF informado já existe na base");
                            $("#js-patient-document").val("");
                        }                        
                    } else {
                        alert(response.message);
                        $("#js-patient-document").val("");
                    }                   
                },
                fail: function () {
                    alert("Erro ao buscar o CPF da base de dados");
                }
            });
        });

        $("#js-patient-age").on("change", function () {
            if (Number(this.value) < 18) {
                $("#js-legal-responsible-data").removeAttr("hidden");
                $("#js-legal-responsible-name").prop("required", true);
                $("#js-legal-responsible-document").prop("required", true);
            } else {
                $("#js-legal-responsible-data").prop("hidden", true);
                $("#js-legal-responsible-name").prop("required", false);
                $("#js-legal-responsible-document").prop("required", false);
            }
        });

        $("#js-patient-zip-code").on("change", function () {
            $.ajax({
                url: baseApiUrl + "/address/" + this.value,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.success == true) {
                        $("#js-patient-address").val(response.data.logradouro);
                    } else {
                        alert(response.message);
                        $("#js-patient-address").val("");
                    }                   
                },
                fail: function () {
                    alert("Erro ao buscar o endereço");
                }
            });
        });
    });
</script>