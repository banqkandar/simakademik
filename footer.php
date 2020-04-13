  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
    const inputs = document.querySelectorAll('.input');

    function focusFunc() {
      let parent = this.parentNode.parentNode;
      parent.classList.add('focus');
    }

    function blurFunc() {
      let parent = this.parentNode.parentNode;
      if (this.value == "") {
        parent.classList.remove('focus');
      }
    }

    inputs.forEach(input => {
      input.addEventListener('focus', focusFunc);
      input.addEventListener('blur', blurFunc);
    });
  </script>
</body>

</html>