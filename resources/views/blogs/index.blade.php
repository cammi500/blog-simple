
 <x-layout>
    <div class=" container">
        <form action="/" method="GET">
            <label for="name">Search :</label>
            <input  value="{{request('query')}}" type="text" name="query" >
            <button type="submit">Search</button>
        </form>

        {{-- @if ($blogs->count()) --}}
        @forelse($blogs as $blog ) 
       <x-blog-card
        :loop='$loop'
         :blog='$blog'/>
         @empty
         <p>No blog found</p>
        @endforelse

        {{-- @else
        <p>No blog found</p>
        @endif --}}
    </div>
</x-layout>
   