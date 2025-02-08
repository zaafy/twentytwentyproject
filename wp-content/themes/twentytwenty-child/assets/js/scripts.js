(function () {
  console.log("this is a message from enqueued script.js file");

  wp.ajax.post("get_books_data", {}).done(function (response) {
    console.log(response);
  }).fail(function (response) {
    console.log(response);
  });
})();
