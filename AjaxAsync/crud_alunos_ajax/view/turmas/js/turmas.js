const urlBase = document.getElementById("confUrlBase").dataset.urlBase;
const selDisc = document.querySelector("#selDisciplina");
const inputAno = document.querySelector("#txtAno");
const divErro = document.getElementById("divMsgErro");

listarDisciplinasAssinc();
function listarDisciplinasAssinc() {
    // Limpar as opções do select de discilinas
    selDisc.innerHTML = "";

    // Criar uma opção vazia
    criarOpcao(0, "---Selecione---");

    // Recebe o ID do curso selecionado
    const idCurso = document.getElementById("selCurso").value; //TODO - Pegar o ID selecionado
    const url = urlBase + "/api/lista_disciplinas.php?id_curso=" + idCurso;

    // Recuperar o ID previamente selecionado
    const idDiscSelecionada = selDisc.getAttribute("idSelecionada");


    // Realiza a requisição AJAX - Forma assincrona
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, true);

    // Função CallBack - Será chamada quando chegar a resposta do servidor
    xhttp.onload = function () {
        var json = xhttp.responseText;

        // Criar as options a partir do JSON recebido
        var disciplinas = JSON.parse(json);
        disciplinas.forEach(disc => {
            criarOpcao(disc.id, disc.codigo + " - " + disc.nome, idDiscSelecionada);
        });
    }

    xhttp.send();
}

// Sincrona
// listarDisciplinas();
function listarDisciplinas() {
    // Limpar as opções do select de discilinas
    selDisc.innerHTML = "";

    // Criar uma opção vazia
    criarOpcao(0, "---Selecione---");

    // Recebe o ID do curso selecionado
    const idCurso = document.getElementById("selCurso").value; //TODO - Pegar o ID selecionado
    const url = urlBase + "/api/lista_disciplinas.php?id_curso=" + idCurso;
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, false);
    xhttp.send();

    // Realiza a requisição AJAX
    var json = xhttp.responseText;
    // console.log(json);

    // Recuperar o ID previamente selecionado
    const idDiscSelecionada = selDisc.getAttribute("idSelecionada");
    // console.log(idDiscSelecionada);    

    // Criar as options a partir do JSON recebido
    var disciplinas = JSON.parse(json);
    disciplinas.forEach(disc => {
        criarOpcao(disc.id, disc.codigo + " - " + disc.nome, idDiscSelecionada);
    });
}

function criarOpcao(id, descricao, idSelecionada = -1) {
    var option = document.createElement("option");
    option.value = id;
    option.innerHTML = descricao;

    if (id == idSelecionada) TML = descricao;

    option.selected = true;

    selDisc.appendChild(option);
}

function salvarTurma() {
    var idDisc = selDisc.value;
    var ano = inputAno.value;

    var dados = new FormData();
    dados.append("disciplina", idDisc);
    dados.append("ano", ano);

    const url = urlBase + "/api/salvar_turma.php";

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url);

    xhttp.onload = function() { 
        var resposta = xhttp.responseText;

        if(resposta != "") {
            divErro.innerHTML = resposta;
            divErro.style.display = "block";
        } else {
            window.location = "listar.php";
        }
    }

    xhttp.send(dados);
}