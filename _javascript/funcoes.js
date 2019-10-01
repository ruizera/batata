function mudaFoto (foto) {
		 document.getElementById("icone").src= foto;
	 
	 }
	 
 
	 isLoged = localStorage.getItem("logaed");
function redirectPage(){
		loged();
		window.location = "index.html";

		return false;
}
function loged(){
			 
		isLoged = true;
		localStorage.setItem("logaed", isLoged);
	 }

	function irLogin(){
		if(!isLoged){
			document.getElementById("lnkLogin").href="cadastro.html";		
		}else{
			document.getElementById("lnkLogin").href="#";					
		}
	}
	 
	 function cadastrar(){
	
	 if(!isLoged){
			document.getElementById("login").innerHTML="Cadastre-se";

		}else{
			document.getElementById("login").innerHTML="Logado ";
		}
}
