<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-green-600">Welcome to Growcery!</h3>
                <p class="text-gray-600">You're successfully logged in. Start managing your products, orders, and profile here.</p>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Products Management -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-bold text-gray-800">Manage Products</h4>
                    <p class="text-gray-600">Add, edit, or remove your farm products easily.</p>
                    <a href="/products" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded">View Products</a>
                </div>

                <!-- Orders Management -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-bold text-gray-800">Manage Orders</h4>
                    <p class="text-gray-600">Track customer orders and update their status.</p>
                    <a href="/orders" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">View Orders</a>
                </div>

                <!-- Profile Management -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-bold text-gray-800">Manage Profile</h4>
                    <p class="text-gray-600">Update your personal information and change your password.</p>
                    <a href="/profile" class="mt-4 inline-block bg-yellow-600 text-white px-4 py-2 rounded">Edit Profile</a>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Recent Orders</h3>
                <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-3 px-4">Order ID</th>
                            <th class="py-3 px-4">Customer</th>
                            <th class="py-3 px-4">Total Amount</th>
                            <th class="py-3 px-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Order Data -->
                        <tr>
                            <td class="py-3 px-4">#1234</td>
                            <td class="py-3 px-4">Juan Dela Cruz</td>
                            <td class="py-3 px-4">₱1,500</td>
                            <td class="py-3 px-4 text-green-500">Completed</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">#1235</td>
                            <td class="py-3 px-4">Maria Santos</td>
                            <td class="py-3 px-4">₱900</td>
                            <td class="py-3 px-4 text-yellow-500">Pending</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">#1236</td>
                            <td class="py-3 px-4">Pedro Pascual</td>
                            <td class="py-3 px-4">₱700</td>
                            <td class="py-3 px-4 text-red-500">Cancelled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

