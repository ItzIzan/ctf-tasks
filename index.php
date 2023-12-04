
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>



<br><br><br><br><br><br><br><br><br>
<hr>
The admin zone contains the flags, Please input the password:<br>
<input type="password" name="password" id="passwordid">
<label for="password"> Type the password here</label><br>
<input type="submit" value="Submit" onclick = 'checkPassword();' >
<a href="index.php">Reset</a>

<script>
function checkPassword (){
if (CryptoJS.MD5(document.getElementById('passwordid').value) == '092fe31229350237d10d885565111db2') {
    location.href="secure.php";
  }
} 

function searchQuery (){
console.log(document.getElementById('searchid').value);
document.getElementById('resid').innerHTML = "No result found for: "  + document.getElementById('searchid').value;
} 



</script>


