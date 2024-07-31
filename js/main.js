const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

function toggleForm() {
	const loginContent = document.querySelector('.login-content');
	const registerContent = document.querySelector('.register-content');
	loginContent.style.display = loginContent.style.display === 'none' ? 'block' : 'none';
	registerContent.style.display = registerContent.style.display === 'none' ? 'block' : 'none';
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
