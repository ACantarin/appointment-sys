<script type="text/javascript">
    $(document).ready(function(){
    M.updateTextFields();
    $('.sidenav').sidenav();
    $('select').formSelect();

    var message = "{{Session::get('alert')}}";
    if (message) {
        alert(message);
    }

    


    });
</script>