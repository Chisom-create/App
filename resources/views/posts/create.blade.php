<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                     @foreach($errors->all()as $error)
                     <li>{{ $error}}</li>
                     @endforeach
                     </ul>
                    </div>
                @endif

    
              <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                Title:
                <br/>
                <input required type="text" name="title"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50"/>
                <br /><br/>
                Post text:
                <br/>
                <textarea name="post_text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                <br/><br/>
                Category:
                <br/>
                <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach($categories as category)
                   <option value="{{ $category->id}}">{{ $category->name}}</option>
                   @endforeach
                </select>
                <br/><br/>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Save</button>
              </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
