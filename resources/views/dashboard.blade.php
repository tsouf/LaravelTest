
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form method="POST" action="add">
            @csrf
                      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block mb-1" for="question">
                   Question
                </label>
                <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" placeholder="Add question">
             
                <div class="form control">
                <fieldset>
                <br>
                    <div>
                        <div class="form-group" >
                            <label class="block mb-1" for="answer1">
                                Answer 1
                             </label>
                             <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="answer1" type="text" placeholder="Add answer..">
                        </div>
                    </div>
                    <div>
                        <div class="form-group" >
                            <label class="block mb-1" for="answer2">
                                Answer 2
                             </label>
                             <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="answer2" type="text" placeholder="Add answer..">
                        </div>
                    </div>
                    <div>
                        <div class="form-group" >
                            <label class="block mb-1" for="answer3">
                                Answer 3
                             </label>
                             <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="answer3" type="text" placeholder="Add answer..">
                        </div>
                    </div>
                </fieldset>
                    <br>

                    <div class="form control">
                        <x-jet-button>
                        <a href="/dashboard" type="submit" >Save</a>
                       
                        </x-jet-button>
                         
                    </div>
                     
                </div>
              
              </div>
            </div>
        </form>
            </div>
         </div>

   

</x-app-layout>
