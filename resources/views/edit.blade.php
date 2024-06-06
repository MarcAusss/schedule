<form action="{{ route('date.store')}}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="flex justify-between my-4" >

            <div class="admin-input">
                <input type="number" name="date" id="" class="w-[550px]  text-white bg-[#403F3D]" placeholder="Date" value="{{$date->date}}">
            </div>


        <div class="submit text-center">
            <input type="submit" value="submit" class="primary-btn !w-[300px] !bg-[#362919]">
        </div>

    </form>