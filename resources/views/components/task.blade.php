<div>
<p>{{$task->title}}</p>
<p>{{$task->description}}</p>
<p>{{\Carbon\Carbon::parse($task->due_date)->diffForHumans()}}</p>
<p>{{$task->status}}</p>
</div>