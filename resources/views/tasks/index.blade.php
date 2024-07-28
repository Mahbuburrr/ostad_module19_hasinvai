<x-layout>
   <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        All Tasks
    </div>
    <div class="mt-6 text-gray-500">
        Unto nor mirth bacchanals love whom his drop deemed few that. That fulness who perchance wight his lurked. Since strange his kiss so mote if not later, he heavenly come yet happy scarce florid harold. Sister the had is whose, paphian grace degree saw power memory, are there losel by break said he one the friends. He pleasure paphian taste mirth ye harold hall pollution sorrow. She finds at or.
    </div>
    <select name=""  id="taskStatus" onChange='filterStatus()' class="bg-gray-50 border border-gray-300 text-gray-800">
        <option value="all" @if($status =='all') selected @endif>All</option>
        <option value="completed" @if($status =='completed') selected @endif> completed</option>
        <option value="pending" @if($status =='pending') selected @endif>pending</option>
    </select>
    <!-- <x-task-status:status="request()->get('status')"/> -->
    <p class-mt-6>
        total task={{count($task)}}
    </p>
   </div>
    <!-- <div class="container mx-auto">
    <div class="mt-10">
    @foreach($task as $task)
    <p>{{$task->title}}</p>
    <p>{{$task->description}}</p>
    <p>{{\Carbon\Carbon::parse($task->due_date)->diffForHumans()}}</p>
    <p class="text-red-400">{{$task->status}}</p>
    @endforeach
    </div> 
    </div> -->
    <div class="mt-5 rounded-lg border bg-card text-card-foreground shadow-sm" >
        <div class="p-6 space-y-3">
            <div>
                <h3 class="text-lg font-medium">Finish Design mockup</h3>
                <p class="text-muted-foreground">Amet amet sed sanctus kasd sed consetetur. Amet eirmod et et magna et. Dolor sit dolor at labore et. Vero sanctus sit rebum lorem consetetur dolor at et, sadipscing sit ut ea lorem accusam erat. Sit ea diam et dolor.</p>
            </div>
            <div class="flex items-center justify-between">
                <div class="text-sm text-muted-foreground">Due:May 15, 2023</div>
            </div>

        </div>

    </div>
    <script>
        function filterStatus(){
            let status=document.getElementById('taskStatus').value;
            if(status=='all'){
                location.href="/tasks"
            }
            else{
                location.href="/tasks?status="+status
            }
        }
    </script>
    
</x-layout>