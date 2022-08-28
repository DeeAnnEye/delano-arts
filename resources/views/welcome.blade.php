<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Delano Arts.</title>
    </head>
    <body>
<div class="fixed">
   <!-- Static sidebar for desktop -->
  <div class="w-full h-screen bg-gradient-to-r from-pink-500 to-gray-500 mb-2 lg:flex lg:flex-shrink-0">
    <div class="flex flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col w-64 max-h-screen border-r border-gray-200 bg-gray-400">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
          <div class="text-pink-600 text-left text-3xl font-bold" >Delano<br>Arts.</div>
          </div>
          <nav class="mt-5 flex-1" aria-label="Sidebar">
            <div class="px-2 space-y-1">
              <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/calendar -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                </svg>
                Dashboard
              </a>

              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/calendar -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                </svg>
                Calendar
              </a>

              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/user-group -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                Teams
              </a>

              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/magnifying-glass-circle -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Directory
              </a>

              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                </svg>
                Announcements
              </a>

              <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/map -->
                <svg class="text-gray-500 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>
                Office Map
              </a>
            </div>
          </nav>
        </div>
        <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
          <a href="/profile" class="flex-shrink-0 w-full group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-pink-700 group-hover:text-gray-900">Whitney Francis</p>
                <p class="text-xs font-medium text-gray-500 group-hover:text-pink-700">View profile</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="mx-2 mt-2 flex flex-auto flex-col w-2/3 mb-2 max-h-screen overflow-y-auto scrollbar-hide min-h-0 "> 
       <!-- card start -->
    <ul role="list" class="grid grid-cols-3 gap-2">
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-8">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="px-2 py-1 text-pink-800 text-xs font-medium bg-pink-100 rounded-full">Artist</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-pink-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <!-- Heroicon name: mini/envelope -->
              <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3">Contact</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <!-- card end -->
    </ul>
    </div>
    <div class="mx-2 mt-2 flex flex-auto flex-col w-1/3 max-h-screen mb-2 overflow-y-auto scrollbar-hide min-h-0 ">
    <ul role="list" class="grid grid-cols-2 gap-2">
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    <li class="col-span-1">
    <div>
    <img class="h-50 w-50" src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="">
    </div>
    </li>
    </ul>
    </div>

  </div>

</div>

    </body>
</html>
