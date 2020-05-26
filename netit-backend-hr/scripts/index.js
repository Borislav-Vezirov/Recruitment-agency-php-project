var container = document.getElementById("container");
var jobCollection      = [];
var objectCollection    = { jobCollection : [] };

Ajax.getJSON("http://localhost/netit-backend-hr/routes.php?request=data", function(data) {

    for(var i = 0; i < data.length; i++) {

        var template = `<div class='row'>
                        <div class='col-sm-4 jp'> <b>${data[i].title}</b></div>
                        <div class='col-sm-2 jp'> <i>${data[i].category}</i></div>
                        <div class='col-sm-3 jp'> ${data[i].company}</div>
                        <div class='col-sm-3 jp'> <button class='btn btn-success'>Виж Повече</button></div>
                        </div>`;

        jobCollection.push(template);
    }

    var jobTemplate = jobCollection.join('');
    container.innerHTML = jobTemplate;

}, function() {
    console.log("GET error")
    console.log(error);
});