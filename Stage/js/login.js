function getDataForm(){
	const form = document.getElementById('form');
			
	form.addEventListener('submit', function(e){
		e.preventDefault();

		const formData = new FormData(form);

		fetch('api/login.php', {
			method: 'post',
			body: formData
		}).then(response => response.text())
		.then((response) => {
		window.location = response;})
		.catch(function(error){
			console.error(error);
		})
	});
}
