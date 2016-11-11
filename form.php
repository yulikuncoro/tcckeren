<!DOCTYPE html> 
<html>  
     <head>
	     <title>Aplikasi Web </title>
		 <link rel="stylesheet"href="style.css">
		 </head>
		 <body>		 
		      <form action="proses.php"method="post">
			  <table>
			  <td><h2>INPUT DATA</H2></td>
			        <tr>
					   <td>Nomor identitas : </td>
					   <td><input type="text" name="identitas"></td>
					 </tr>
				     <tr>
					   <td>Nama : </td>
					   <td><input type="text" name="nama"></td>
					 </tr>
					 <tr>
					   <td>Tanggal Lahir : </td>
					   <td>Hari : <input type="text" name="hari"> Bulan : <input type="text" name="tanggal"> Tahun : <input type="text" name="tahun"> </td>
					 </tr>
					 <tr>
					 <td>Jenis Kelamin :</td>
					 <td><select name="jenis kelamin">
			                   <option value="1">Pria</option>
			                   <option value="2">Perempuan</option>
			                    </select>
						</td>		
					</tr>
                     <tr>
					   <td>Tinggi Badan : </td>
					   <td><input type="text" name="tinggi"></td>
					 </tr>
					 <tr>
					   <td>Berat Badan : </td>
					   <td><input type="text" name="berat"></td>
					 </tr>
                     <tr>
					   <td><input type="submit"value="KIRIM"></td>
				 </tr>
				 </table>
			   </form> 
	   </body>
	</html>