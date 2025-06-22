 @extends('layouts.admin')

 @section('content')
     <div class="flex justify-between items-center mb-6">
         <h1 class="text-2xl font-bold">Kelola Post</h1>
         <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Post</a>
     </div>
     <table class="min-w-full bg-white rounded shadow">
         <thead>
             <tr>
                 <th class="py-2 px-4 border-b">Judul</th>
                 <th class="py-2 px-4 border-b">Kategori</th>
                 <th class="py-2 px-4 border-b">Penulis</th>
                 <th class="py-2 px-4 border-b">Aksi</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($posts as $post)
                 <tr>
                     <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                     <td class="py-2 px-4 border-b">{{ $post->category->name ?? '-' }}</td>
                     <td class="py-2 px-4 border-b">{{ $post->user->name ?? '-' }}</td>
                     <td class="py-2 px-4 border-b">
                         <a href="#" class="text-blue-600 hover:underline">Edit</a> |
                         <a href="#" class="text-red-600 hover:underline">Hapus</a>
                     </td>
                 </tr>
             @endforeach
         </tbody>
     </table>
 @endsection
