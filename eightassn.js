function validate()
{
    rflag= true;
    num1=document.getElementById("num1").value;
    num2=document.getElementById("num2").value;
    
    if(num1=="" || isNaN(num1))
        {
            alert("enter valid number in first");
            rflag=false;
            
        }
    if(num2==""||isNaN(num2))
        {
            alert("enter a valid number in second")
            rflag=false;
        }
    return rflag;
}