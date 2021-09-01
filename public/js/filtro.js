var jqXhr;

$('form[name="form-filtro"]').submit(function (event) {
    event.preventDefault();

    var valorNome = $(this).find("input#nome").val().trim();
    var valorTipo = $(this).find("select#tipo option").filter(':selected').val().trim();
    var valorAno = $(this).find("input#ano").val().trim();
    var temFiltro = (valorNome.length + valorAno.length + valorTipo.length) != 0;
    if (temFiltro) {
        jqXhr = $.ajax({
            type: 'post',
            url: "/trabalhos/filtro",
            dataType: 'json',
            data: $(this).serialize(),
            success: function (respostas) {
                var trabalhos = respostas.trabalhosFiltrados.data;
                if (!respostas.semTrabalho) {
                    $('tbody#table-body-content').html(function () {
                        var dadosTrabalhosComFiltro;
                        trabalhos.forEach((trabalho) => {
                            dadosTrabalhosComFiltro += `<tr class='tabela-hover'>
                                    <td>${trabalho.titulo}</td>
                                    <td>${trabalho.autor}</td>
                                    <td>${trabalho.tipo}</td>
                                    <td>${new Date(trabalho.data).getFullYear()}</td>
                                </tr>`;
                        });

                        return dadosTrabalhosComFiltro;
                    });
                } else {
                    $('tbody#table-body-content').html(
                        "<tr> <td colspan='5'><div class='info-nao-encontrado'>Nenhum trabalho encontrado</div></td></tr>"
                    );
                }
            },
        });
    }

    jqXhr.done(function (respostas) {

        var dadosTrabalhosSemFiltro;
        var trabalhos = respostas.todosTrabalhos.data
        trabalhos.forEach((trabalho) => {
            dadosTrabalhosSemFiltro += `<tr class='tabela-hover'>
                        <td>${trabalho.titulo}</td>
                        <td>${trabalho.autor}</td>
                        <td>${trabalho.tipo}</td>
                        <td>${new Date(trabalho.data).getFullYear()}</td>
                    </tr>`;
        });

        $('#nome').on('keyup', function () {
            if ($(this).val().length == 0) {
                $('tbody#table-body-content').html(dadosTrabalhosSemFiltro);
            }
        });

        $('#tipo').on('change', function () {
            if ($(this).val().length == 0) {
                $('tbody#table-body-content').html(dadosTrabalhosSemFiltro);
            }
        });

        $('#ano').on('keyup', function () {
            if ($(this).val().length == 0) {
                $('tbody#table-body-content').html(dadosTrabalhosSemFiltro);
            }
        });
    });

});

// Impede que o select abra ao da enter e submete a requisição
$('#tipo').keypress(function (event) {
    if (event.which == 13) {
        event.preventDefault();
        $('form[name="form-filtro"]').submit();
    }
});

$(document).ajaxStart(function () {
    $("tbody#table-body-content").hide();
    $("tbody#table-body-loading").show();
});

$(document).ajaxComplete(function () {
    $("tbody#table-body-content").show();
    $("tbody#table-body-loading").hide();
});


$(document).ready(function () {
    var valorNome = $("input#nome").val().trim();
    var valorTipo = $("select#tipo option").filter(':selected').val().trim();
    var valorAno = $("input#ano").val().trim();
    var temFiltro = (valorNome.length + valorAno.length + valorTipo.length) != 0;

    console.log(temFiltro);
    console.log("Nome: "+valorNome);
    console.log("Tipo: "+valorTipo);
    console.log("Ano: "+valorAno);
});


$(document).ajaxComplete(function() {
    $('.pagination li a').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $.ajax({
            url: url,
            success: function(data) {
                $('#result').html(data);
            }
        });
    });
}); 

