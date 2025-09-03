console.log("file connected");

document.getElementById("bmdc-link").addEventListener("click", function () {
  console.log("link clicked");
  const copiedNumber =
    document.getElementById("bmdc-number").parentNode.parentNode.parentNode
      .children[2].children[0].children[0].innerText;
  console.log(copiedNumber);
  navigator.clipboard.writeText(`${copiedNumber}`);
});
