@extends('admin.adminBase')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl mb-4">Insert Specialization</h2>

        <form id="insertCategory">
            <div class="mb-4">
                <label for="cat_title" class="block text-gray-700 text-sm font-bold mb-2">Specialization Title</label>
                <input type="text" id="cat_title" name="cat_title" placeholder="Enter title" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="cat_description"
                    class="block text-gray-700 text-sm font-bold mb-2">More About Specialization</label>
                <input type="text" id="cat_description" name="cat_description"
                    placeholder="More About Specialization" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </form>
    </div>
</div>


   
@endsection
