

// This is your test publishable API key.
const stripe = Stripe("pk_live_51Lls1vISq4UKm7Rd4lq6HENWJVfe6XnS4uF1er16l7H1cxoQU6z37OeZDITHR2VwrBTbQUhBVMz0MiPlfVLvNZQj00EtNintRP");

// The items the customer wants to buy
const items = [{ id: secret , amount: value }];



let elements;

initialize();
checkStatus();

document
  .querySelector("#payment-form")
  .addEventListener("submit", handleSubmit);

// Fetches a payment intent and captures the client secret
async function initialize() {
  const body = JSON.stringify({ items });


  // console.log(stripe, items, body)
  const clientSecret = secret;

  return_url = return_url+'&ssi='+clientSecret+'&lid='+clientSecret;
  elements = stripe.elements({ clientSecret });

    // console.log(elements);

  const paymentElement = elements.create("payment");
  paymentElement.mount("#payment-element");
  let details = await stripe.retrievePaymentIntent(clientSecret);

}

async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  console.log(elements);

  const { error } = await stripe.confirmPayment({
    elements,
    confirmParams: {
      // Make sure to change this to your payment completion page
      return_url: return_url,
    },
  });


  // This point will only be reached if there is an immediate error when
  // confirming the payment. Otherwise, your customer will be redirected to
  // your `return_url`. For some payment methods like iDEAL, your customer will
  // be redirected to an intermediate site first to authorize the payment, then
  // redirected to the `return_url`.
  if (error.type === "card_error" || error.type === "validation_error" || error.code === "url_invalid" /*TESTING*/) {
    showMessage(error.message);
  } else {
    showMessage("An unexpected error occured.");
  }

  setLoading(false);

  
}

// Fetches the payment intent status after payment submission
async function checkStatus() {
  const clientSecret = new URLSearchParams(window.location.search).get(
    "payment_intent_client_secret"
  );

  if (!clientSecret) {
    console.log('no client')
    return;
  }

  const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

  console.log(clientSecret)

  switch (paymentIntent.status) {
    case "succeeded":
      showMessage("Payment succeeded!");
      break;
    case "processing":
      showMessage("Your payment is processing.");
      break;
    case "requires_payment_method":
      showMessage("Your payment was not successful, please try again.");
      break;
    default:
      showMessage("Something went wrong.");
      break;
  }
}

// ------- UI helpers -------

function showMessage(messageText) {
  const messageContainer = document.querySelector("#payment-message");

  messageContainer.classList.remove("hidden");
  messageContainer.textContent = messageText;

  setTimeout(function () {
    messageContainer.classList.add("hidden");
    messageText.textContent = "";
  }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
}