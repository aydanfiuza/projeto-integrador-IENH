const iconeCadastro = document.getElementById("cadastro");
const corCadastro = document.getElementById("cor1");
const iconeEntrada = document.getElementById("entrada");
const corEntrada = document.getElementById("cor2");
const iconeSaida = document.getElementById("saida");
const corSaida = document.getElementById("cor3");
const iconeRelatorio = document.getElementById("relatorio");
const corRelatorio = document.getElementById("cor4");

iconeCadastro.onmouseover = () => {
    corCadastro.style.color = "black";
    corCadastro.style.transition = "0.4s";
};

iconeCadastro.onmouseout = () => {
    corCadastro.style.color = "#38B6FF";
};

iconeEntrada.onmouseover = () => {
    corEntrada.style.color = "black";
    corEntrada.style.transition = "0.4s";
};

iconeEntrada.onmouseout = () => {
    corEntrada.style.color = "#38B6FF";
};