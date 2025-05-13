<div id="error-alert" class="flex items-start gap-3 p-4 border-l-4 border-red-500 bg-red-50 text-red-800 rounded-lg shadow-md transition-opacity duration-300 ease-in-out">
  <!-- Icon -->
  <svg class="w-6 h-6 text-red-500 mt-1 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
       viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M12 9v2m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
  </svg>

  <!-- Message -->
  <div class="flex-1">
    <h3 class="font-semibold text-sm">Something went wrong</h3>
    <p class="text-sm">Please check your inputs and try again. If the problem persists, contact support.</p>
  </div>

  <!-- Dismiss button -->
  <button onclick="document.getElementById('error-alert').classList.add('opacity-0')"
          class="text-red-500 hover:text-red-700 transition">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
         viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M6 18L18 6M6 6l12 12"/>
    </svg>
  </button>
</div>
