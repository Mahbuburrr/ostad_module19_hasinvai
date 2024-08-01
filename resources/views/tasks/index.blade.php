<x-layout>
   <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        All Tasks
    </div>
    <div class="mt-6 text-gray-500">
        Unto nor mirth bacchanals love whom his drop deemed few that. That fulness who perchance wight his lurked. Since strange his kiss so mote if not later, he heavenly come yet happy scarce florid harold. Sister the had is whose, paphian grace degree saw power memory, are there losel by break said he one the friends. He pleasure paphian taste mirth ye harold hall pollution sorrow. She finds at or.
    </div>
    <x-task-status :status="request()->get('status')"/>
    <!-- <x-task-status :status="request()->get('status')"/> -->
    <p class-mt-6>
        total task={{count($task)}}
    </p>
   </div>
    <div class="container mx-auto">
    <div class="mt-10">
    @foreach($task as $task)
    <x-task :task="$task"/>
    @endforeach
    </div> 
    </div>
    
    
    
</x-layout>