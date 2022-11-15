    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict';
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');
      
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach((form) => {
          form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();


      // mdb.Alert.getInstance(document.getElementById("alertExample")).update({
      //   position: "top-right",
      //   delay: 2000,
      //   autohide: false,
      //   width: "600px",
      //   offset: 20,
      //   stacking: false,
      //   appendToBody: true,
      // });