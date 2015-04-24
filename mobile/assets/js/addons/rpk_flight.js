function processRoutes(curID)
{
    //f706b4faa29d0788bec42022be11962b::02
    //get id
    //        alert(curID);
    var n=curID.split("::");
    var code = n[0]+"::";
    var id = n[n.length-1];
    //        alert(code);
    //        alert(n[0]);
    var itiComby = allitiComby[n[0]];
    itiComby = itiComby.sort();
    var difComby = alldifComby[n[0]];
    //        alert(allitiComby);
    var iti = itiComby.length;
    //        alert(iti);
    var dif = difComby.length;
    var enablefirst = true;

    for(var i=0; i<iti; i++)
    {
        var aid = itiComby[i].split("|");

        if (aid[0] == id)
        {
            //alert(code+aid[1]);
            if (enablefirst)
            {
                document.getElementById(code+aid[1]).checked=true;
                enablefirst = false;
            }
            document.getElementById(code+aid[1]).disabled=false;
            document.getElementById('deny'+code+aid[1]).style.display = 'none';
            
            var selectorsClass = closest(document.getElementById(code+aid[1]), 'tr');
            var cssSelector = '.'+selectorsClass.replace(' ','.');
            cssSelector = cssSelector.split(' ');
            $('tr'+cssSelector[0]).removeClass('disable');
        }
    }

    for (var j=0; j<dif; j++)
    {
        var did = difComby[j].split("|");
        if(did[0] == id)
        {
            //alert("disabling: " +code+did[1]);
            document.getElementById(code+did[1]).checked=false;
            document.getElementById(code+did[1]).disabled=true;
            document.getElementById('deny'+code+did[1]).style.display = 'inline';
            
//            console.log(closest(document.getElementById(code+did[1]), 'tr'));
            var selectorsClass = closest(document.getElementById(code+did[1]), 'tr');
            var cssSelector = '.'+selectorsClass.replace(' ','.');
            var rows = document.getElementsByClassName(cssSelector);
            //document.getElementsByClassName(cssSelector).parentNode.parentNode.parentNode.className = selectorsClass+" disable";
            $(cssSelector).closest('tr').attr('class',selectorsClass+" disable");
        }
    }

}


//get closest element from 'elem' that matches 'selector'
function closest(elem, selector) {

   var matchesSelector = elem.matches || elem.webkitMatchesSelector || elem.mozMatchesSelector || elem.msMatchesSelector;

    while (elem) {
        if (matchesSelector.bind(elem)(selector)) {
            return elem.getAttribute('class');
        } else {
            elem = elem.parentElement;
        }
    }
    return false;
}