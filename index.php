
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>


Welcome to the free version of the English-French translator. <br>
<input type="text" name="search" id="searchid">
<label for="searchid"> Enter an english word</label><br>
<input type="submit" value="Submit" onclick = 'searchQuery();' >
<p id='resid'></p>




<br><br><br><br><br><br><br><br><br>
<hr>

In order to access the paid version, please input the password: <br>
<input type="password" name="password" id="passwordid">
<input type="submit" value="Submit" onclick = 'checkPassword();' >

<script>
  function checkPassword (){
if (CryptoJS.MD5(document.getElementById('passwordid').value) == '2766aa8220af4a29d0ac20b22a162bd2') {
    location.href="secure4HmkSEhH.php";
  }
} 

function searchQuery (){
   let value = document.getElementById('searchid').value;
   	 if (value.includes("href")) {
	    document.getElementById('resid').innerHTML = "Sorry, you cannot look for strings containing 'href' (are you trying to inject some code?)";
	    } else {
	    document.getElementById('resid').innerHTML = "No translation found for: "  + value;
	    }
} 
</script>


