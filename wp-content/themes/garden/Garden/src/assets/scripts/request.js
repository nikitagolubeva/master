export async function sendDataToServer(formData) {
  let response = await fetch(window.myajax.url, {
    method: "POST",
    body: formData,
  });

  let result = await response.json();

  return result;
}
