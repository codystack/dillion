const paymentForm = document.getElementById('form-select-payment');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_75ccc5f677072776b6108096ccb19ee64339604f', // Replace with your public key
    email: document.getElementById('email').value,
    firstname: document.getElementById('first_name').value,
    lastname: document.getElementById('last_name').value,
    amount: document.getElementById('amount').value * 100,
    currency: 'NGN',
    ref: 'REF_'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    metadata: {
      custom_fields: [
        {
          display_name: "Property Title",
          variable_name: "property_title",
          value: document.getElementById('property_title').value
        }
      ]
    },
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      window.location = "./verify_transaction?reference=" + response.reference; // Verify transaction Reference
    }
  });
  handler.openIframe();
}