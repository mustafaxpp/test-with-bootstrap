<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center text-uppercase text-danger">
           {{__('messages.Store')}}
        </h1>
    </x-slot>

    {{-- <div class="w-full flex md:flex-row flex-col">
        <div class="md:w-1/3 w-full h-screen bg-gray-300 ">
            <div class="mx-3 my-6 px-6 py-10 bg-white rounded-lg">
                <form method="POST" action="{{route('store.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-6 my-2">
                        <input name="name" class="w-full px-2 py-1  text-red-700 border-red-800 border-2 " placeholder="Name">
                        @error('name')
                        <span class="text-red-500">
                                {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div  class="mx-6 my-2">
                        <input name="logo" type="file"  class="w-full px-2 py-1  text-red-700 border-red-800 border-2 ">
                        @error('logo')
                        <span class="text-red-500">
                                {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div  class="mx-6 my-2">
                        <input class="h-8 w-full bg-red-800 text-white" value="Save" type="submit" >
                    </div>
                </form>
            </div>
         </div>
        <div class="md:w-2/3 w-full  h-screen bg-gray-300 ">
            <div class="mx-3 my-6 px-6 py-10 bg-white rounded-lg flex flex-wrap">
                @foreach (\App\Models\Store::all() as $store)
                    <div class="h-32 w-32 p-2 m-4 bg-red-300 text-center" >
                        @if ($store->logo)
                        <img class="w-full" src={{asset('/storage/'.$store->logo)}} alt="{{$store->name}}">
                        @endif
                        {{$store->name}}
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-4 mt-5">
                <form method="POST" action="{{route('store.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                     <input type="text" name="name"  class="form-control" placeholder="You Store Name " >

                     @error('name')
                        <span class="text-danger">
                                {{$message}}
                        </span>
                        @enderror
                   </div>
                   <div class="form-group mt-4">
                    <input type="file" name="logo" class="form-control">
                    @error('logo')
                        <span class="text-danger">
                                {{$message}}
                        </span>
                        @enderror
                  </div>
                  <div class="form-group mt-3">
                      <input type="submit" class="btn btn-sm btn-primary" value="Save">
                  </div>

                </form>
            </div>
            <div class="col-8">
                <table class="table text-center table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Company Name</th>
                            <th>Company logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Store::all() as $store)
                        <tr>
                            <td>{{$store->id}}</td>
                            <td>{{$store->name}}</td>
                            <td class="text-center">
                                @if ($store->logo)
                                <img width="100" src={{asset('/storage/'.$store->logo)}} >
                                @endif
                            </td>
                        </tr>
                @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
