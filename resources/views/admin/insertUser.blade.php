@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Add New User</h3>
            </div>
            <div class="p-4">
                <form id="addDoctor">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">User Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. abc kumar">
                        </div>
                    <div class="flex gap-2 mb-4">
                        <div class=" w-1/2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. abckumar@gmail.com">
                        </div>
                        <div class=" w-1/2">
                            <label for="mobile_no" class="block text-sm font-medium text-gray-700">Contact No.</label>
                            <input type="tel" id="mobile_no" name="mobile_no"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 1234567890">
                        </div>
                    </div>
                    <div class="flex gap-2 mb-4">
                        <div class=" w-1/2">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input type="number" id="age" name="age"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 45">
                        </div>
                        <div class=" w-1/2">
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" id="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                                <option value="">Select Gender</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" id="address" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 123, abc road, near xyz Chowk, Purnea, Bihar "></textarea>
                    </div>
                    <div class="mb-2">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add New User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
