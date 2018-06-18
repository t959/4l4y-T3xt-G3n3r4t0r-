<head> 
     <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'/>
	 <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
     <link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css" />
 <style type="text/css">
 body {
	   background:black; font-size:11px;
	   font-family: Roboto;
    color: white;  }
textarea {
  	   width:400px;
  	   height:200px;
  	   background: black;
  	   border:1px solid darkred;
  	   color: white;
  	   font-family: Roboto;
  	   }
  input[type=text] , input[type=file] , select {   
       background:black;
       color:white;border: 1px solid darkred; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
        }
  input[type=submit] {
       background:#b70505;
       color:white;border: 1px solid #000; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
       }
  input[type=button] {
       background:#b70505;
       color:white;border: 1px solid #000; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
       }
  button[type=submit] {
       background:#b70505;
       color:white;border: 1px solid #000; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
       }
</style>

<title>4l4y T3xt G3n3r4t0r</title>
<br />
        <center> <font color="red" face="iceland" size="10">4l4y T3xt G3n3r4t0r</font>
		 <br /> <br />
<img src="https://cdn.pbrd.co/images/6RXeCi5n8.png" width="100" height="100">
<br /> <br />
<i> Masukkan teks normal yang ingin dibuat menjadi ALAY Text</i></div><br />
<span style="background-color: cyan;"></span><br />
<script type="text/javascript">
<!--
  function HumanToABG(form){
    var abgteks="";
    var stemp;
    var i,j;
    var acak;
    var aseli=form.aseli.value;
    
    var TabelHuruf="AEGIOSZ";
    var TabelAngka="4361052"; //01234567890
    
    var TabelVokal="AIUEO";
    
    if(aseli.length)
    {
     //modifikasi huruf besar kecil kecil
     if(form.pilihan[0].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
      acak = Math.round(2*Math.random())
      if(acak)
         abgteks=abgteks+aseli.charAt(i).toLowerCase();
        else
         abgteks=abgteks+aseli.charAt(i).toUpperCase();
    }
   } 
   else
    abgteks=aseli;
   
   //Modifikasi huruf jadi angka
   var terganti=0;
   stemp="";
   if(form.pilihan[1].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
     acak=Math.round(2*Math.random())
     terganti=0;
     if(acak)
     {
       
       for(j=0;j<TabelHuruf.length;j++)
       { 
        if(abgteks.charAt(i).toUpperCase()==TabelHuruf.charAt(j))
        {
          stemp=stemp+TabelAngka.charAt(j);
          
          terganti=1;
          break;
         }
        }
       }      
       
       if(terganti==0) //huruf tidak dapat diganti 
        stemp=stemp+abgteks.charAt(i);
    }
    abgteks=stemp;
   } 
  
  //disingkat-singkat biar pendek
  stemp="";
  if(form.pilihan[2].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
     acak=Math.round(2*Math.random())
     terganti=0;
     if(acak)
     {
       
       for(j=0;j<TabelVokal.length;j++)
       { 
        if(aseli.charAt(i).toUpperCase()==TabelVokal.charAt(j))
        {
         if((aseli.charAt(i-1)!=" ")&&(i>0))
         {
           //stemp=stemp+TabelAngka.charAt(j); hilangkan saja
           terganti=1;
          }
          break;
         }
        }
       }      
       
       if(terganti==0) //huruf tidak dapat diganti 
        stemp=stemp+abgteks.charAt(i);
    }
    abgteks=stemp;
   } 
   
   
     form.abg.value=abgteks;
   }
   else
   {
    form.abg.value="hahahahaha script ini hasil contekan, sekarang mau kamu conetk lagi";
   }
    }
// -->
</script><br />
<form action="ABG_Text.html"><table align="center" style="width: 700px;"><tbody>
<tr>           <th style="background-color: red;">Teks Normal</th>           <td>&nbsp;&nbsp;</td>           <th style="background-color: red;">Teks ALAY</th>          </tr>
<tr>           <th style="background-color: cyan;"><textarea cols="45" name="aseli" rows="10">Masukkan kalimat yang ingin dijadikan Text ALAY disini!</textarea></th>            <td>&nbsp;&nbsp;</td>           <th style="background-color: cyan;"><textarea cols="45" name="abg" rows="10"></textarea></th>        </tr>
<tr>           <td><input name="pilihan" type="checkbox" /> HuRUf bEsAr keCil</td><td>&nbsp;&nbsp;</td>           <th>&nbsp;&nbsp;</th>    </tr>
<tr>     <td><input name="pilihan" type="checkbox" /> P4k3 4n9k4 D0n9</td><td>&nbsp;&nbsp;</td>     <th>&nbsp;&nbsp;</th>    </tr>
<tr>     <td><input name="pilihan" type="checkbox" /> Disngkt-sngkt biar pndk</td><td>&nbsp;&nbsp;</td>     <th>&nbsp;&nbsp;</th>    </tr>
<tr>           <td><input onclick="HumanToABG(this.form)" type="button" value="Go ALAY Go!" /></td>           <td>&nbsp;&nbsp;</td>           <td>&nbsp;&nbsp;</td>        </tr>
</tbody></table></form><br />
