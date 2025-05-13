<!-- Alert Error -->
<?php if(isset($_SESSION['message_error'])):?>

  <div>
    <div class="max-w-2xl w-full mx-4 sm:mx-auto" >
      <div id="error-alert" class="flex items-start gap-3 p-7 border-l-4 border-red-500 bg-red-50 text-red-800 rounded-lg shadow-md transition-opacity duration-300 ease-in-out" style="padding: 10px !important;">
        <!-- Icon -->
        <svg class="w-6 h-6 text-red-500 mt-1 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9v2m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
        </svg>
        <!-- Message -->
        <div class="flex-1">
          <h3 class="font-semibold text-sm">Something went wrong</h3>
          <p class="text-sm"><?= htmlspecialchars($_SESSION['message_error']);?></p>
        </div>
        <!-- Dismiss button -->
        <button onclick="dismissAlert()" class="text-red-500 hover:text-red-700 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <script>
    function dismissAlert() {
      const alert = document.getElementById('error-alert');
      alert.classList.add('opacity-0');
      setTimeout(() => {
        alert.style.display = 'none';
      }, 300);
    }

    setTimeout(() => {
      dismissAlert();
    }, 5000);
  </script>
  <?php unset($_SESSION['message_error']); ?>
<?php endif;?>
<!-- 
 Alert Success -->
<?php if(isset($_SESSION['message_success'])):?>
  <div class="max-w-2xl w-full mx-4 sm:mx-auto">
    <div id="success-alert" class="flex items-start gap-3 p-7 border-l-4 border-green-500 bg-green-50 text-green-800 rounded-lg shadow-md transition-opacity duration-300 ease-in-out" style="padding: 10px !important;">
      <!-- Icon -->
      <svg class="w-6 h-6 text-green-500 mt-1 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M5 13l4 4L19 7" />
      </svg>

      <!-- Message -->
      <div class="flex-1">
        <h3 class="font-semibold text-sm">Success!</h3>
        <p class="text-sm"><?= htmlspecialchars($_SESSION['message_success']);?></p>
      </div>

      <!-- Dismiss button -->
      <button onclick="dismissSuccess()" class="text-green-500 hover:text-green-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <script>
    function dismissSuccess() {
      const alert = document.getElementById('success-alert');
      alert.classList.add('opacity-0');
      setTimeout(() => {
        alert.style.display = 'none';
      }, 300);
    }

    setTimeout(() => {
      dismissSuccess();
    }, 5000);
  </script>
  <?php unset($_SESSION['message_success']); ?>
<?php endif;?>
