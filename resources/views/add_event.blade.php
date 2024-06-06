<form action="{{ route('event.store')}}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="flex justify-between my-4" >

            <div class="admin-input">
                <input type="number" name="date_id" id="" class="w-[550px]  text-white bg-[#403F3D]" placeholder="Event ID">
            </div>
            <div class="admin-input">
                <input type="text" name="event" id="" class="w-[550px]  text-white bg-[#403F3D]" placeholder="Event">
            </div>


        <div class="submit text-center">
            <input type="submit" value="submit" class="primary-btn !w-[300px] !bg-[#362919]">
        </div>

    </form>