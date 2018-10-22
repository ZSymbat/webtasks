var task = document.getElementById("tasks");
var spans = task.getElementsByTagName("div");
for (var i = 0; i<spans.length; i++){
	var span = spans[i];
	span.addEventListener("click",through)
}
function through(){
	var target = event.currentTarget;
	target.dataset.status = 'done';
}