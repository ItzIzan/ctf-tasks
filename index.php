
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>

Welcome to the worst search engine in the world!<br>
<input type="text" name="search" id="searchid">
<label for="searchid"> Enter your search query</label><br>
<input type="submit" value="Submit" onclick = 'searchQuery();' >
<p id='resid'></p>



<br><br><br><br><br><br><br><br><br>
<hr>
The admin zone contains the flags, Please input the password:<br>
<input type="password" name="password" id="passwordid">
<label for="password"> Type the password here</label><br>
<input type="submit" value="Submit" onclick = 'checkPassword();' >

<script>
function checkPassword (){
if (CryptoJS.MD5(document.getElementById('passwordid').value) == 'be2f09f22ccdabad2d27dcd5d50c20a4') {
    location.href="secure.php";
  }
} 

function searchQuery (){
console.log(document.getElementById('searchid').value);
document.getElementById('resid').innerHTML = "No result found for: "  + document.getElementById('searchid').value;
} 



</script>


