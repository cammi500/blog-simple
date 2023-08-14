
 <x-layout>
    <div class=" container">
        @foreach($blogs as $blog ) 
     
       <x-blog-card
        :loop='$loop'
         :blog='$blog'/>
     
        @endforeach
    </div>
</x-layout>
   