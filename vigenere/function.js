
function encrypt() {
	var message = document.getElementById("message").value;
	var key = document.getElementById("key").value;
	var algorithm = document.getElementById("algorithm").value;
	var result = "";
	
	switch(algorithm) {
		case "vigenere":
			result = vigenereEncrypt(message, key);
			break;
		default:
			alert("Invalid algorithm selected");
			return;
	}
	
	document.getElementById("result").value = result;
}

function decrypt() {
	var message = document.getElementById("message").value;
	var key = document.getElementById("key").value;
	var algorithm = document.getElementById("algorithm").value;
	var result = "";
	
	switch(algorithm) {
		case "vigenere":
			result = vigenereDecrypt(message, key);
			break;
		default:
			alert("Invalid algorithm selected");
			return;
	}
	
	document.getElementById("result").value = result;
}
  
/* Vigenere Cipher */

function vigenereEncrypt(message, key) {
  // Prepare the key
  key = prepareKey(key, message.length);

  // Encrypt the message
  let encryptedText = '';
  for (let i = 0; i < message.length; i++) {
    const charCode = (message.charCodeAt(i) + key.charCodeAt(i)) % 26 + 65;
    encryptedText += String.fromCharCode(charCode);
  }

  return encryptedText;
}

function vigenereDecrypt(message, key) {
  // Prepare the key
  key = prepareKey(key, message.length);

  // Decrypt the message
  let decryptedText = '';
  for (let i = 0; i < message.length; i++) {
    const charCode = (message.charCodeAt(i) - key.charCodeAt(i) + 26) % 26 + 65;
    decryptedText += String.fromCharCode(charCode);
  }

  return decryptedText;
}

function prepareKey(key, length) {
  // Repeat the key to match the length of the message
  let preparedKey = '';
  const keyLength = key.length;
  let i = 0;
  while (preparedKey.length < length) {
    preparedKey += key.charAt(i);
    i = (i + 1) % keyLength;
  }

  return preparedKey.toUpperCase();
}

