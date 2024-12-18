@if(session()->has('message'))
<div class="fixed bottom-0 right-0 bg-black text-white p-4 text-center rounded " role="alert">
    <p>{{ session('message') }}</p>
</div>
@endif
