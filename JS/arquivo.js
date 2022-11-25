$('.slider-principal').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplaySpeed: 2000
});


function mostrarOcultarSenha(){
  var senha = document.getElementById("senha");
  if(senha.type == "passowrd"){
      senha.type ="text";
  }else{
      senha.type="password";
  }
}


function mostrarOcultarConfirmaSenha(){
  var confirmaSenha = document.getElementById("confirmaSenha");
  if(confirmaSenha.type == "passowrd"){
    confirmaSenha.type ="text";
  }else{
    confirmaSenha.type="password";
  }
}