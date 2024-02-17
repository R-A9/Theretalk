function onFormSubmit(){

}
function readFormData(){
    var formData = {};
    formData["name"] = document.getElementById("fullName").value;
    formData["post"] = document.getElementById("post").value;
    return formData;
}