function verif()
{

var nom=document.getElementById("nom").value

//span
var cmon=document.getElementById("cmon")
cmon.innerHTML=""




 //nom condition   
for (let i=0;i<nom.length;i++)
{
    if (!(nom.charAt(i).toUpperCase()>="A" && nom.charAt(i).toUpperCase()<="Z"))
    {
    cmon.innerHTML="Nom doit etre une chaine de caractere!"
    return false;
    }
}  


    //prenom condition   
for (let i=0;i<prenom.length;i++)
{
    if (!(prenom.charAt(i).toUpperCase()>="A" && prenom.charAt(i).toUpperCase()<="Z"))
    {
    cprenom.innerHTML="Prenom doit etre une chaine de caractere!"
    return false;
    }
}

}