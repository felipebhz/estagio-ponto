<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>



<script>
    $(document).ready(function() {

        $("#data_registro").change(function() {
            let dataRegistro = $("#data_registro").val();
            let baseUrl = '<?php echo base_url('registro/ajaxItemData/') ?>';
            let editUrl = '<?php echo base_url('registro/edit/') ?>';
            let novoUrl = '<?php echo base_url('registro/novo/') ?>';
            $.ajax({
                url: baseUrl + dataRegistro,
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (!$.isEmptyObject(response)) {
                        console.log(response);

                        if ((response[0].hora_entrada !== "00:00:00") ||
                            (response[0].hora_saida_almoco !== "00:00:00") ||
                            (response[0].hora_entrada_almoco !== "00:00:00") ||
                            (response[0].hora_saida !== "00:00:00")) {

                            window.location.href = editUrl + response[0].id;

                            $("#hora_entrada").val(response[0].hora_entrada);
                        } else {
                            window.location.href = novoUrl;
                        }



                    } else {
                        const redirect = novoUrl;
                        let dataSelecionada = $("#data_registro").val();

                        $.redirect(novoUrl, {
                                dataSelecionada: dataSelecionada
                            },
                            "POST", "_self");

                    }
                }
            });
        });



        $("#delete_registro").click(function(e) {
            e.preventDefault();
            let del_link = $(this).attr('href');
            swal({
                title: "Deseja Deletar?",
                text: "Não será possível recuperar.",
                type: "warning",
                closeOnClickOutside: true,
                showConfirmButton: true,
                showCancelButton: true,
                buttons: ["Cancelar", "Deletar"],
            }, function() {
                window.location.href = del_link;
            });


        })

    });
</script>


</body>

</html>