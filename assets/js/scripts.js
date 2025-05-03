$(function () {
    $('input[name=price], input[name=quantity], input[name=min_quantity]').mask('#.##0,00', { reverse: true });
    $('input[name=cod]').mask('#');
});

function fecharMensagem() {
    const mensagem = document.getElementById('mensagemSucesso');
    if (mensagem) {
      mensagem.style.display = 'none';
    }
  }

function atualizaRelogio() {
    const agora = new Date();
    const horas = String(agora.getHours()).padStart(2, '0');
    const minutos = String(agora.getMinutes()).padStart(2, '0');
    const segundos = String(agora.getSeconds()).padStart(2, '0');

    const horaAtual = `${horas}:${minutos}:${segundos}`;
    document.getElementById('relogio').textContent = horaAtual;
}

setInterval(atualizaRelogio, 1000);
atualizaRelogio();