var container          = document.getElementById("container");
var jobCollection      = [];
var objectCollection   = { jobCollection : [] };
var fullView           = document.getElementById('fullView');

Ajax.getJSON("http://localhost/netit-backend-hr/routes.php?request=posts", function(data) {

    for(var i = 0; i < data.length; i++) {

        var element =   data[i];
        var template = `<div class='row'>
                        <div class='col-sm-4 jp'> <b>${element.title}</b></div>
                        <div class='col-sm-2 jp'> <i>${element.category}</i></div>
                        <div class='col-sm-3 jp'> ${element.company}</div>
                        <div class='col-sm-2 jp'> <button class='btn btn-info ml-auto'onclick="extended(${element.id});">Виж Повече</button></div>
                        </div>`;

        jobCollection.push(template);
    }

    var jobTemplate = jobCollection.join('');
    container.innerHTML = jobTemplate;

}, function() {
    console.log("GET error")
    console.log(error);
});

 var extended = function(elementId) {
    Ajax.getJSON("http://localhost/netit-backend-hr/routes.php?request=index&${elementId}", function(element) {
        fullView.innerHTML = element[0].content;
    });
}