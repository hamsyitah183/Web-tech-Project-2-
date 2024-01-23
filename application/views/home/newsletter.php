
 <div class="container" style = "margin-top:180px">

 <form method="post" action="<?= base_url(); ?>newsLetter/savedata">
<h1>Subscribe to our news letter</h1>
<table width="600" style = "border:1;" cellspacing="5" cellpadding="5">
<tr>
<td width="230">Name </td>
<td width="329"><input type="varchar" name="Name"/></td>
</tr>
<tr>
<td>Email </td>
<td><input type="varchar" name="Email"/></td>
</tr>
<tr>
<td>Gender </td>
<td><input type="text" name="Gender"/></td>
</tr>
<tr>
<td colspan="2" style = "display:float; float : center"><input type="submit" name="save" value="Save Data"/></td>
</tr>
</table>

</form>

 </div>

 
