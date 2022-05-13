function verif()
{

var nom=document.getElementById("nom").value
var id=document.getElementById("id").value

//span
var cmon=document.getElementById("cmon")
cmon.innerHTML=""
var cid=document.getElementById("cid")
cid.innerHTML=""



 //nom condition   
for (let i=0;i<nom.length;i++)
{
    if (!(nom.charAt(i).toUpperCase()>="A" && nom.charAt(i).toUpperCase()<="Z"))
    {
    cmon.innerHTML="Nom doit etre une chaine de caractere!"
    return false;
    }
}
if((id.length!=3) || (isNaN(id)))
	{
	cid.innerHTML="le champs code event  doit  contenir seulement 3 chiffres!"
return false;
	}
//date condition 
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;
if (date<today)
cdate.innerHTML="Date doit etre inferieur a la date d'aujourd'hui!!"


}