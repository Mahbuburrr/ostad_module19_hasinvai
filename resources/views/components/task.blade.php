<div class="mt-5 rounded-lg border bg-card text-card-foreground shadow-sm" >                                                                                                            
        <div class="p-6 space-y-3">
            <div>
                <h3 class="text-lg font-medium">{{$task->title}}</h3>
                <p class="text-muted-foreground">{{$task->description}}</p>
                <input type="hidden" name="status" value="{{$task=='completd'?'pending':'completed'}}">
                    <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background translation-color focus-visible:outline-none focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2 disabled:opacity-50 disabled:pointer-events-none">
                      {{$task->status}}
                    </button>
                
            </div>
            <div class="item-center p-6 flex justify-end">
                <form action="{{route('tasks.update',$task)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="status" value="{{$task=='completd'?'pending':'completed'}}">
                    <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background translation-color focus-visible:outline-none focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2 disabled:opacity-50 disabled:pointer-events-none">
                     Mark as {{$task->status=='completd'?'pending':'completed'}}
                    </button>
                </form>
            </div>
            <!-- <div class="flex items-center justify-between">
                <div class="text-sm text-muted-foreground">{{\Carbon\Carbon::parse($task->due_date)->diffForHumans()}}</div>
                <button class="inline-flex items-center justify-center whitespace-nowrap text-sm">
                    mark as completed
                </button>
            </div> -->

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