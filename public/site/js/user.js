var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile_avt = function(event) {
    var image = document.getElementById('block');
    image.src = URL.createObjectURL(event.target.files[0]);
};