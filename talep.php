<html>
<head>
	<style>
 div{
 margin:auto;
 margin-top:5px;
 margin-left:5px;
 height:auto;
 width:410px;
 color:white;
 border:2px solid black;
 padding:25px;
 background:lightskyblue;
 }
 .btn{
 width:253px;
 }
 </style>
 </head>
 <body>
 <div>
 <h3 align="center">Talep Formu</h3>
 <form action="talepKontrol.php" method="POST">
 <table align="center" cellpadding="5px">
 <tr>
 <td>Adı Soyadı</td>
 <td><input type="text" name="adisoyadi" class="form-control"
placeholder="Ad Soyad Giriniz" require></td>
 </tr>
 <tr>
 <td>Mesaj</td>
 <td><textarea name="mesaj" cols="30" rows="5" class="formcontrol" placeholder="Talebinizi yazınız"></textarea></td>
 </tr>
 <tr> 
 <td colspan="2" align="right"><input
type="submit" value="Gönder" class="btn btn-primary"></td>
 </tr>
 </table>
 </form>
  </div>
</body>
</html>
