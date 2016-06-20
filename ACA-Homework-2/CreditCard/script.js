window.alert('How about a 16 digit card number?');
var mod = 1;
/*function luhn(stra){
   if (/[^0-9-\s]+/.test(str)) return false;
   value = str.replace(/\D/g, "");
   var str = document.getElementById('numbers').value;
   var length = str.length;
   var array;

   for (var i = 0; i < length; i++){
     array[i] = parseInt(str[i]);
   }
   var sum = 0;
   for (i = str.length-1; i >=0; i-=2){
     array[i]*=2;
     if (array[i] > 9){
       array[i]-=9;
     }
   }
   for (i = 0; i < str.length; i++){
     sum = sum + array[i];
   }

   sum*=3;
   var koko = sum % 100;

   if (koko == 0){
     return true;
   }else{
     return false;
   }



}*/

function valid_credit_card(value) {

    if (/[^0-9-\s]+/.test(value)) return false;


    var nCheck = 0, nDigit = 0, bEven = false;
    value = value.replace(/\D/g, "");

    for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
            nDigit = parseInt(cDigit, 10);

        if (bEven) {
            if ((nDigit *= 2) > 9) nDigit -= 9;
        }

        nCheck += nDigit;
        bEven = !bEven;
    }

    return (nCheck % 10) == 0;
} // (C) GITHUB


/*function autospace(){
  var cardNumberInput = document.getElementById('numbers');
  var image = document.getElementById('logo');
  var image = document.getElementById('logo');
  var input1 = document.getElementById('text1');
  var input2 = document.getElementById('text2');
  var input3 = document.getElementById('text3');
  var input4 = document.getElementById('text4');
  var cardNumber = input1.value + input2.value + input3.value + input4.value;
  var cardNumber = cardNumberInput.value;
  var length = cardNumber.length;
  if(length > 4){
    length = length + 1;
    if((length % 4) == mod){
      if (mod > 3){
        mod = 1;
      }
      if (mod <=3){
        mod = mod + 1;
      }
      cardNumberInput.value = cardNumber + " ";
    }
  }

  if(cardNumber.length == 4){
    cardNumberInput.value = cardNumber + " ";
  }

  if (cardNumber.length == 19){
    document.getElementById('numbers').readOnly = true;
    change();
  }


}*/


function change(){
  /*var cardNumberInput = document.getElementById('numbers');*/
  var image = document.getElementById('logo');
  var input1 = document.getElementById('text1');
  var input2 = document.getElementById('text2');
  var input3 = document.getElementById('text3');
  var input4 = document.getElementById('text4');
  /*var cardNumber = cardNumberInput.value;*/
  var cardNumber = input1.value + input2.value + input3.value + input4.value;
  var firstChar = cardNumber[0];
  var secondChar = cardNumber[1];
  var id = firstChar + secondChar;
  var check = valid_credit_card(cardNumber);
  if (cardNumber.length < 16){
    window.alert('Please fill in all inputs');
    return;
  }
  if (check == true){window.alert('valid');}else{window.alert('invalid');}
  switch (id) {
    case "45":
      image.src = "visa.png";
      break;

    case "49":
      image.src = "visa.png";
      break;

    case "60":
      image.src = "discover.png";
      break;

   case "67":
     image.src = "laser.png";
     break;

   case "53":
     image.src = "mastercard.png";
     break;


   case "51":
     image.src = "mastercard.png";
     break;

   case "52":
     image.src = "mastercard.png";
     break;

   case "31":
     image.src = "jcb.png";
     break;

   case "33":
     image.src = "jcb.png";
     break;

  case "34":
    image.src = "american.png";
    break;

  case "37":
    image.src = "american.png";
    break;

  case "06":
    image.src = "maestro.png";
    break;

  case "50":
    image.src = "maestro.png";
    break;

    case "63":
      image.src = "maestro.png";
      break;

  /*default:
    window.alert('Sorry but we found no credit card company with that starting numbers.');
    document.getElementById('numbers').readOnly = false;
    mod = 1;
    break;*/

  }


}
