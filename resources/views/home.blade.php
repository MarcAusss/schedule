        <!-- component -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
@vite('resources/css/app.css')

  </head>
  <body class="bg-gray-200">
    <div class="container mx-auto mt-10">
    <div class="wrapper bg-white rounded shadow w-full ">
      <div class="header flex justify-between border-b p-2">
        <span class="text-lg font-bold">
          2020 July
        </span>
        <div class="buttons">
          <a href="{{route ('date.create')}}">Add Date</a>
          <a href="{{route ('event.create')}}">Add Event</a>
        </div>
      </div>
      <div class="w-full p-10">

        <div class="grid grid-cols-7 gap-0">
        <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
            </div>
            <div class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
            </div>
              

              <!-- To be deleted -->



            @foreach ($date as $dateNum)
              <div class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden relative">
                  <div class="top h-5 w-full relative">
                    <a href="{{ route ('date.show', $dateNum->id)}}" class="text-gray-500">
                    {{$dateNum->date}}
                    </a>
                  </div>
                     
                    
                    <a href="{{ route ('date.edit', $dateNum->id)}}" class="btn btn-outline-primary" >Edit</a> 
                  <form action="{{ route ('date.destroy', $dateNum->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure to delete this?')" class="bg-[#85684A] py-2 px-10 text-white rounded-[10px]">Delete</button>
                                </form>

                    </div>

                </div>

            
                      
              @endforeach



              <!-- end of To be deleted -->
                                    
              <div class="flex justify-center gap-10">
      </di>

          <!--         line 4 -->
        </div>

      </di>
    </div>
  </div>
  </body>
</html>