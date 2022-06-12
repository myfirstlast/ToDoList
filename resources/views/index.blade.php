@extends('layouts.main')

@section('main-container')

<div class="containerw-25 mt-5">
         <div class="card shadow-sm">
              <div class="card-body">
                   <form action="{{ route('store') }}"method="POST"autocomplete="off">
                        @csrf
                        <div class="input-group">
                             <input type="text"name="content"class="form-control"placeholder="Add your new todo here">
                             <button type="submit"class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
                        </div>
                    </form>
                    {{--if tasks count--}}
                    @if(count($todolists))
                        <ul class="list-group list-group-flush mt-3">
                            @foreach ($todolists as $todolist)
                                <li class="list-group-item">
                                    <form action="{{route('destroy', $todolist->id)}}" method="POST">
                                        {{$todolist->content}}
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-sm float-end">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <!-- <a href="{{route('index', $todolist->id)}}" class="btn btn-link btn-sm float-end">Edit</a> -->
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center mt-3">No Tasks!</p>
                    @endif
              </div>
                @if(count($todolists))
                    <div class="card-footer"></div>
                    You have {{ count($todolists) }} pending tasks
                @endif
         </div>
    </div>

@endsection