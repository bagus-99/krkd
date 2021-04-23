<html>
  <head>
    <title>
      Hapus dengan js
    </title>
 <script>   
function hapus_confirm(){
 var msg = "Apakah anda yakin untuk menghapusnya"
 agree = confirm(msg)
  if (agree)
    return true
  else
    return false
}
    </script>
  </head>
  <body>
    <a href="<!-- Url hapus -->" onclick="return hapus_confirm()">Hapus</a>
  </body>
</html>