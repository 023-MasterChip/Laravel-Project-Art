<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title>Delano Arts.</title>
    </head>
    <body>
<div class="flex h-screen ">
  <!-- Narrow sidebar -->
  <div class="hidden w-28 overflow-y-auto bg-gray-400 md:block">
    <div class="flex w-full flex-col items-center py-6">
    <div class="flex items-center flex-shrink-0 px-4">
          <div class="text-pink-600 text-left text-xl font-bold" >Delano<br>Arts.</div>
          </div>
      <div class="mt-6 w-full flex-1 space-y-1 px-2">
        <!-- Current: "bg-pink-800 text-white", Default: "text-pink-100 hover:bg-pink-800 hover:text-white" -->
        <a href="/welcome" class="text-pink-100 hover:bg-pink-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
          <!--
            Heroicon name: outline/home

            Current: "text-white", Default: "text-pink-300 group-hover:text-white"
          -->
          <svg class="text-pink-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          <span class="mt-2">Home</span>
        </a>

        <!-- <a href="#" class="bg-pink-800 text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium" aria-current="page">
         
          <svg class="text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
          <span class="mt-2">My Artworks</span>
        </a> -->

        <a href="#" class="comArt text-pink-100 hover:bg-pink-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-pink-300 group-hover:text-white h-6 w-6 mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg>

          <span class="mt-2">Commission the Artist</span>
        </a>
        <!-- <a href="#" class="text-pink-100 hover:bg-pink-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
          
          <svg class="text-pink-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                </svg>
          <span class="mt-2">Settings</span>
        </a>  -->
      </div>
    </div>
  </div>
  @if(session()->has('message'))
              <div aria-live="assertive" class="sessionAlert z-40 pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
                <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
                  <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="flex-shrink-0">
                          <!-- Heroicon name: outline/check-circle -->
                          <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                          <p class="text-sm font-medium text-gray-900">{{ session()->get('message') }}!</p>
                        </div>
                        <div class="ml-4 flex flex-shrink-0">
                          <button type="button" class=" alertClose inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                            <span class="sr-only">Close</span>
                            <!-- Heroicon name: mini/x-mark -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif
            @if(session()->has('error'))
              <div aria-live="assertive" class="sessionAlert z-40 pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
                <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
                  <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="flex-shrink-0">
                          <!-- Heroicon name: outline/check-circle -->
                          <svg class="h-6 w-6 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" >
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                          <p class="text-sm font-medium text-gray-900">{{ session()->get('error') }}!</p>
                        </div>
                        <div class="ml-4 flex flex-shrink-0">
                          <button type="button" class=" alertClose inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                            <span class="sr-only">Close</span>
                            <!-- Heroicon name: mini/x-mark -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif

            <!-- Commission Modal -->
           
            <div class="comModal hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
              
              <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
              <div class="fixed inset-0 z-10 overflow-y-auto">
                
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                  <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                  <div class="closeButton absolute top-0 right-0 hidden pt-4 pr-4 sm:block">
                      <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                        <span class="sr-only">Close</span>
                        <!-- Heroicon name: outline/x-mark -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </div>
                  <div>
                  <h2 class="text-lg font-medium text-pink-900">Commission the Artist</h2>
                      <form class="py-6" action="{{url('sendmail')}}" method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type='hidden' value="{{ $artist->email }}" name='artistEmail'>
                    <div class="flex flex-col">
                        <label for="title" class="block text-sm font-medium text-gray-700">Enter Title:</label>
                        <div class="mt-1">
                          <input type="text" name="title" id="title" class="block w-80 h-10 rounded-md border border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm" placeholder="">
                        </div>
                        <label for="name" class="mt-4 block text-sm font-medium text-gray-700">Enter Art Description:</label>
                        <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="mt-5 sm:mt-6">
                      <button type="submit" name="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-pink-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 sm:text-sm">Send Commission</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              </div>

<!-- Commission Modal End -->

  <!-- Content area -->
  <div class="flex flex-1 flex-col overflow-hidden">
    <!-- Main content -->
    <div class="flex flex-1 items-stretch overflow-hidden">
      <main class="flex-1 overflow-y-auto">
        <div class="mx-auto max-w-7xl px-4 pt-8 sm:px-6 lg:px-8">
          <div class="flex">
            <h1 class="flex-1 text-2xl font-bold text-gray-900">{{$artist->name}}'s Artworks</h1>
          </div>
          <!-- Gallery -->
          <section class="mt-8 pb-16 " aria-labelledby="gallery-heading">
          @if(!$art['data']->isEmpty())
            <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 ">
            @foreach($art['data'] as $art)  
            <li class="relative">
                <a href="{{url('/imgdetail', $art->id)}}">
                <div id="{{ $art->id }}" class="imgRing group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden">
                  <!-- Current: "", Default: "group-hover:opacity-75" -->
                  <img src="{{ asset('storage/upload/' . $art->image) }}" alt="" class="object-cover pointer-events-none">
                  <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                  </button>
                </div>
                </a>
                <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">{{ $art->name }}</p>
                <p class="pointer-events-none block text-sm font-medium text-gray-500">{{ $art->i_width }} x {{ $art->i_height }}</p>
              </li>             
              @endforeach
            </ul>
          @else
              <h1 class="mt-40 ml-36 text-xl font-medium text-gray-600">Oops...No art uploaded yet.</h1>
          @endif
          </section>
          
                 
                </div>
              </div>
        </div>
      </main>

      <!-- Details sidebar -->
      @if(session()->has('artname'))
      <div class="sidebar">
      <aside class="w-96 overflow-y-auto border-l border-gray-200 bg-white p-8 lg:block">
      <div class="closeB absolute top-0 right-0 pt-2 pr-2 sm:block">
          <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
            <span class="sr-only">Close</span>
            <!-- Heroicon name: outline/x-mark -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="space-y-6 pb-16">
          <div>
            <div class="aspect-w-6 aspect-h-7 block w-full overflow-hidden rounded-lg">
              <img src="{{ asset('storage/upload/' . session('artimage')) }}" alt="" class="object-cover">
            </div>
            <div class="mt-4 flex items-start justify-between">
              <div>
                <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for </span>{{ session('artname') }}</h2>
              </div>
            </div>
          </div>
          <div>
            <h3 class="font-medium text-gray-900">Information</h3>
            <dl class="mt-2 divide-y divide-gray-200 border-t border-b border-gray-200">
              <div class="flex justify-between py-3 text-sm font-medium">
                <dt class="text-gray-500">Uploaded by</dt>
                <dd class="whitespace-nowrap text-gray-900">{{$artist->name}}</dd>
              </div>

              <div class="flex justify-between py-3 text-sm font-medium">
                <dt class="text-gray-500">Created</dt>
                <dd class="whitespace-nowrap text-gray-900">{{date('d-m-Y', strtotime(session('artcreated')))}}</dd>
              </div>

              <!-- <div class="flex justify-between py-3 text-sm font-medium">
                <dt class="text-gray-500">Last modified</dt>
                <dd class="whitespace-nowrap text-gray-900">{{date('d-m-Y', strtotime(session('artupdated')))}}</dd>
              </div> -->

              <div class="flex justify-between py-3 text-sm font-medium">
                <dt class="text-gray-500">Dimensions</dt>
                <dd class="whitespace-nowrap text-gray-900">{{ session('artwidth') }} x {{ session('artheight') }}</dd>
              </div>

              <div class="flex justify-center py-3 text-sm font-medium">
              <a download="art" href="{{ Storage::url('upload/' . session('artimage')) }}" title="art"><button type="button" class="inline-flex items-center rounded-full border border-transparent bg-pink-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Download</button></a>
              <!-- <button type="button" class="inline-flex items-center rounded-full border border-transparent bg-pink-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Delete</button> -->
              </div>

            </dl>
          </div>
          <!-- <div>
            <h3 class="font-medium text-gray-900">Description</h3>
            <div class="mt-2 flex items-center justify-between">
              <p class="text-sm italic text-gray-500">Add a description to this image.</p>
              <button type="button" class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500">
               
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                </svg>
                <span class="sr-only">Add description</span>
              </button>
            </div>
          </div> -->
          <!-- <div class="flex">
            <button type="button" class="flex-1 rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Contact</button>
          </div> -->
        </div>
      </aside>
    </div>
    @endif
    </div>
  </div>
</div>
<script type="text/javascript">
        $(document).ready(function () {

            $('.closeButton').on('click', function(e){
                $('.comModal').addClass('hidden');
            });

            $('.closeB').on('click', function(e){
                $('.sidebar').addClass('hidden');
            });

            $('.comArt').on('click', function(e){
                $('.comModal').removeClass('hidden');
            });

            $('.imgRing').on('click', function(e){
            $('.artImage').removeClass('artImage ring-2 ring-offset-2 ring-pink-500'); 
            $("#" + $(this).attr("id")).addClass('artImage ring-2 ring-offset-2 ring-pink-500');
            });

            $('#fileupload').change(function() {
            var i = $(this).prev('label').clone();
            var file = $('#fileupload')[0].files[0].name;
            $(this).prev('label').text(file);
            $('.imageText').addClass('hidden');
            });

            $('.alertClose').on('click', function(e){
                $('.sessionAlert').addClass('hidden');
            });
        });
    </script>
    </body>
</html>