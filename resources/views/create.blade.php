 <x-layout>
     <x-slot:title>Create Landing Page</x-slot:title>


     <div class="d-flex justify-content-center mt-3">
         <h1 class="display-6 fw-bold text-decoration-underline">Landing Pages App</h1>
     </div>

     <div class="container-fluid">
         <form action="/landings" method="POST" id="form" class="">
             @csrf
             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="lp_domain">Write here the Landing Page Domain: </label>
                     <input type="text" name="lp_domain" id="lp_domain" class="border" required>
                 </div>
             </div>


             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="favicon">Write here the favicon: </label>
                     <input type="text" name="favicon" id="favicon" class="border" required>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="page_logo">Write here the page logo: </label>
                     <input type="text" name="page_logo" id="page_logo" class="border" required>
                 </div>

             </div>

             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="page_title">Write here the page title: </label>
                     <input type="text" name="page_title" id="page_title" class="border" required>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="ctaLink">Write here the cta link: </label>
                     <input type="text" name="ctaLink" id="ctaLink" class="border" required>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 mt-1">
                     <label for="bgImg">Write here the bg IMG: </label>
                     <input type="text" name="bgImg" id="bgImg" class="border" required>
                 </div>
             </div>

             <div class="row mt-3 ms-1">
                 <div class="col-2 d-flex justify-content-center">
                     <button class="bg-danger text-white border-danger">Submit</button>
                 </div>
             </div>
         </form>
     </div>

     <script>
         const url = document.getElementById('url');
         document.getElementById("form").action = url.value;
     </script>


 </x-layout>




