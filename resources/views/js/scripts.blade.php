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

        $("#js-patient-zip-code").on("change", function () {
            $.ajax({
                url: baseApiUrl + "/address/" + this.value,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    console.log(response.data);
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