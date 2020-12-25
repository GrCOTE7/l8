<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <input wire:model="message" class="form-input rounded-md shadow-sm block mt-1 w-full" type="text"/>
        <p>{{ $message }}</p>
      </div>
    </div>
  </div
