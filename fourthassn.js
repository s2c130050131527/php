noofboxes=2;

function addbutton()
{
    noofboxes+=1;
    document.getElementById("nofbox").value=noofboxes;
    var newbox=document.createElement("input");
    newbox.setAttribute('type','text');
    newbox.setAttribute('name','box'+noofboxes);
    newbox.setAttribute('required','');
    document.getElementById("tbox").appendChild(newbox);
    

}


